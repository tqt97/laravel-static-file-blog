<div class="text-sm mt-10">
    <p>
        {{ $post->author }} / {{ $post->date->toDateString() }} - {{ Str::readingMinutes($post->contents) }}
    </p>
    @if (count($post->tags))
        <ul class="not-prose p-0 list-none flex items-center space-x-1 mt-2">
            @foreach ($post->tags as $tag)
                <li
                    class="text-sm mt-2 rounded-lg border border-blue-200 py-1 px-2 transition duration-300 ease-in-out hover:bg-blue-500 mr-3 font-medium capitalize text-blue-500 hover:text-white dark:hover:text-white">
                    <a href="{{ route('tags.show', $tag) }}" class="">{{ Str::title($tag) }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
