<article class="prose">
    <h1 class="not-prose">
        <a href="{{ route('posts.show', $post->slug) }}" class="hover:text-blue-500 transition-colors duration-100">
            {{ $post->title }}
        </a>
    </h1>
    <div>{{  Str::of($post->teaser)->limit(50) }}</div>
    <x-post-meta :post="$post" />
</article>
