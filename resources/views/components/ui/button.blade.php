@props([
    'type' => 'primary', // primary, full, outline
    'href' => null,
    'fullWidth' => false
])

@php
    $classes = 'btn ';
    if ($type === 'primary') $classes .= 'btn-primary';
    elseif ($type === 'full') $classes .= 'btn-full';
    elseif ($type === 'outline') $classes .= 'btn-outline';
    
    if ($fullWidth) $classes .= ' w-100'; // можно добавить свой класс для 100% ширины
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes, 'type' => 'submit']) }}>
        {{ $slot }}
    </button>
@endif