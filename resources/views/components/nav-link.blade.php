@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-2xl leading-5 text-gray-900 hover:text-black focus:outline-none transition font-extrabold border-b-4 border-[#E9E1B9] mb-0.5'
            : 'inline-flex items-center px-1 pt-1 text-md hover:scale-110 font-semibold leading-5 hover:text-black text-gray-600 hover:border-gray-300 transition duration-300 ease-in-out hidden sm:flex mb-0.5';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
