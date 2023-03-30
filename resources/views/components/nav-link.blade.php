@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-2xl font-medium leading-5 text-gray-900 focus:outline-none transition font-bold'
            : 'inline-flex items-center px-1 pt-1 text-md hover:scale-150 font-medium leading-5 text-gray-600 hover:border-gray-300 transition duration-300 ease-in-out hidden sm:flex';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
