@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block py-2 px-4 text-sm bg-gray-900 rounded-md transition duration-150 ease-in-out'
            : 'block py-2 px-4 text-sm hover:bg-gray-700 rounded-md transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
