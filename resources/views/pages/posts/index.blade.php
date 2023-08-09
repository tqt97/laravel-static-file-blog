<x-app-layout>
    {{-- <div class="space-y-16">

    </div> --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-4 w-full">

        @if ($posts->count())
            @foreach ($posts as $post)
                <x-post-list-item :post="$post" />
            @endforeach

            {{ $posts->links() }}
        @else
            <p>Nothing here yet.</p>
        @endif

    </div>
</x-app-layout>
