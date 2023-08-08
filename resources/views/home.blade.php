<div class="space-y-16">
    @if ($posts->count())
        @foreach ($posts as $post)
            {{ $post }}
        @endforeach

        {{ $posts->links() }}
    @else
        <p>Nothing here yet.</p>
    @endif
</div>
