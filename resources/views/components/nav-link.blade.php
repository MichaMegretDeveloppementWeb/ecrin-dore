@props(['active' => false])

@php
    $classes = ($active ?? false)
        ? 'text-brand-gold border-b-2 border-brand-gold pb-1'
        : 'text-brand-gray hover:text-brand-black transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-brand-gold/30';
@endphp

<a {{ $attributes->merge(['class' => 'text-sm uppercase tracking-widest font-semibold ' . $classes]) }}>
    {{ $slot }}
</a>