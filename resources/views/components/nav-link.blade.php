@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-md font-medium leading-5 text-gray-900 focus:outline-none transition font-bold'
            : 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-600 hover:text-[#303202] hover:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
