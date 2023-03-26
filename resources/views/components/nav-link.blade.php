@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#86891d] text-sm font-medium leading-5 text-[#545703] focus:outline-none focus:border-[#787c04] transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-[#787c04] hover:text-[#303202] hover:border-gray-300 focus:outline-none focus:text-[#303202] focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
