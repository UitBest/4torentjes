@props(['active', 'index'])

@php
    $index1 = ($index ?? false)
        ? 'text-white hover:text-gray-200'
        : 'text-gray-900 hover:text-black';

    $index2 = ($index ?? false)
        ? 'text-gray-300 hover:text-gray-200'
        : 'text-gray-600 hover:text-black';

    $classes = ($active ?? false)
        ? 'inline-flex items-center px-1 pt-1 text-2xl leading-5 focus:outline-none transition font-extrabold mb-0.5 '.$index1
        : 'inline-flex items-center px-1 pt-1 text-md hover:scale-110 font-semibold leading-5 hover:border-gray-300 transition duration-300 ease-in-out hidden sm:flex mb-0.5 '.$index2;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
