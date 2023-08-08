# Build Blog Laravel 10 with markdown file


### How to clone
- Clone this project
- Run  ``composer install``
- Run  ``npm install``
- Run  ``cp .env.example .env``
- Run  ``php artisan key:generate ``
- Run  ``npm run build``
- Run  ``npm run dev``
- Run  ``php artisan serve ``

### Step to make project
1. Install tailwincss, plugin
    ```
        https://tailwindcss.com/docs/guides/laravel
        https://tailwindcss.com/docs/typography-plugin
    ```
    * Config follow guide


2. Install sheets, laravel-markdown
    ```
        https://github.com/spatie/sheets
        https://spatie.be/docs/laravel-markdown/v1/installation-setup
    ```
    * Config follow guide
    * Register custom route for Sheet in *RouteServiceProvider*
    * Customize parser markdown with **laravel markdown** in *App/ContentParsers/MarkdownWithFrontMatterParser*

3. Implement posts
    * Make model, controller, view, routes
4. Implement tags
    * Make controller, view, route
5. Create posts markdown file in ``storage/app/posts``

* Structure of markdown file
    > Name file format : [date.name.md]

    **eg:** 2023-08-08.first-blog.md
    ```[md]
        ---
        title: Your title here

        author: Nam of author

        teaser: Your teaser

        tags : ['tag1','tag2']

        ---

        Content here !
    ```


