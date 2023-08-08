import dedent from "dedent";
import fs from 'fs'
import prompts from 'prompts'

const questions = [
    {
        name: 'title',
        message: 'Enter post title : ',
        validate: name => name.length < 5 ? `Invalid Length` : true,
        type: 'text',
    },
    {
        name: 'author',
        message: 'Enter author name : ',
        initial: 'Tuantq',
        type: 'text',
    },
    {
        name: 'tags',
        message: 'Enter your tags : ',
        type: 'text',
    },
    {
        name: 'teaser',
        message: 'Enter teaser :',
        type: 'text',
    },
];

const formatDate = () => {
    let d = new Date()
    return  [
        d.getFullYear(),
        ('0' + (d.getMonth() + 1)).slice(-2),
        ('0' + d.getDate()).slice(-2),
    ].join('-')
}

const capitalizeFLetter = (title) => {
    return title[0].toUpperCase() + title.slice(1)
}

const skeletonContents = (answers) => {
    const tagArray = answers.tags.split(',')
    tagArray.forEach((tag, index) => (tagArray[index] = tag.trim()))
    const tags = "'" + tagArray.join("','") + "'"

    let contents = dedent`---
                title: ${answers.title ? capitalizeFLetter(answers.title) : 'Untitled Blog'}
                author: ${answers.author ? answers.author : ''}
                tags: [${answers.tags ? tags : ''}]
                teaser: ${answers.teaser ? answers.teaser : ' '}
                `

    contents += '\n---' + '\nContent go here !'

    return contents
}

const makeFileName = (title) => {
    let fileName = title
        .toLowerCase()
        .replace(/[^a-zA-Z0-9 ]/g, '')
        .replace(/ /g, '-')
        .replace(/-+/g, '-')

    return formatDate() + '.' + fileName
}

const makeFilePath = (title) => {
    const fileName = makeFileName(title)

    if (!fs.existsSync('./storage/app/posts')) fs.mkdirSync('storage/app/posts', { recursive: true })

    return `./storage/app/posts/${fileName ? fileName : 'untitled'}.md`
}

(async () => {
    const answers = await prompts(questions);
    // answers => { title, author, tags, teaser }

    const contents = skeletonContents(answers)

    const filePath = makeFilePath(answers.title)

    fs.writeFile(filePath, contents, { flag: 'wx' }, (err) => {
        if (err) {
            throw err
        } else {
            console.log(`\nBlog post generated successfully at ${filePath}`)
        }
    })
})();
