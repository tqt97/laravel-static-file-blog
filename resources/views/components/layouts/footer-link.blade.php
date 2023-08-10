<a
    {{ $attributes->merge(['class' => 'text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500']) }}>
    {{ $slot }}
</a>
