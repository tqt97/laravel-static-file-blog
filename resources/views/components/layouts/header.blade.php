<header
    class=" shadow-sm supports-backdrop-blur:bg-white/95 sticky top-0 z-40 overflow-x-hidden bg-white/50 py-3 backdrop-blur dark:bg-dark/75">
    <div class="mx-auto flex max-w-3xl items-center justify-between px-3 xl:max-w-5xl xl:px-0">
        <div>
            <a href="{{ route('posts.index') }}"
                class="inline-block text-2xl font-extrabold hover:text-blue-500 transition-colors duration-100">

                <div class="flex items-center justify-between" data-umami-event="logo">
                    <div class="mr-3 flex items-center justify-center">
                        {{ config('app.name') }}
                    </div>
                </div>
            </a>
        </div>
        <div class="flex items-center text-base leading-5">
            <div class="hidden space-x-2 sm:block">
                <a href="{{ route('posts.index') }}">
                    <span
                        class="inline-block rounded px-2 py-1 font-medium {{ Route::currentRouteName() == 'posts.index' ? 'bg-blue-500 text-gray-50' : Route::currentRouteName() }}  sm:px-3 sm:py-2 hover:text-gray-50 hover:bg-blue-600">
                        Blog
                    </span>
                </a>
            </div>
        </div>
    </div>
</header>
