@php
    $classes = 'p-4 bg-orange-500/5 rounded-xl border border-transparent hover:border-blue-700 group transition-colors duration-300';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>