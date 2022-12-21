@props(['active'])

@php
$classes = ($active ?? false)
            ? 'p-2 text-white bg-secondary rounded'
            : 'p-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
