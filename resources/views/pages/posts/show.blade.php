<x-app-layout>
    <article class="prose prose-lg text-justify">
        <h1>{{ $post->title }}</h1>
        <x-post-meta :post="$post" />

        <div>{{ $post->contents }}</div>
    </article>
</x-app-layout>
