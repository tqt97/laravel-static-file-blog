<div class="prose p-6 shadow-md rounded-xl hover:shadow-lg group group-link-underline my-5">
    <a href="{{ route('posts.show', $post->slug) }}" class="no-underline">
        <h3
            class="mt-1 leading-normal under text-gray-800 group-hover:text-blue-500 font-semibold text-2xl lg:text-4xl line-clamp-3 transition translation-all duration-200 ease-in-out">
            {{ $post->title }}
        </h3>
    </a>

    <div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-1">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>

                <time class="ml-1 text-gray-600" datetime="2021-11-06T08:29:56+00:00">
                    {{ $post->date->toDateString() }}
                </time>
            </div>
            {{-- <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="ml-1 inline-block text-gray-600">
                    {{ Str::readingMinutes($post->contents) }}
                </p>
            </div>

            <p class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>

                <span class="ml-2 text-gray-600">
                    {{ $post->author }}
                </span>
            </p> --}}
            @if (count($post->tags))
            <ul class="not-prose p-0 list-none flex items-center space-x-1">
                @foreach ($post->tags as $tag)
                    <li
                        class="text-sm rounded-lg border border-blue-500 py-1 px-3 transition duration-300 ease-in-out hover:bg-blue-500 mr-3 font-medium capitalize text-blue-500 hover:text-white dark:hover:text-white">
                        <a href="{{ route('tags.show', $tag) }}" class="">{{ Str::title($tag) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
        </div>

        <p class="mt-6 leading-normal line-clamp-3 text-lg text-gray-600">
            {{ Str::of($post->teaser)->limit(150) }}
        </p>
    </div>

    <div class="mt-5 transform hover:translate-x-1 duration-200 readmore">
        <a class="text-base font-medium leading-6 my-5 transition text-primary-500 hover:text-blue-500 readmore-hover:text-blue-500 no-underline "
            href="{{ route('posts.show', $post->slug) }}">
            Read more →
        </a>
    </div>
</div>
