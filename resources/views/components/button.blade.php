@props([
    'primary' => false,
    'secondary' => false,
    'warning' => false,
    'lg' => false,
    'icon' => false,
    'loading' => null,
])

@php
    $loadingTarget = null;
    if ($wireClick = $attributes->get('wire:click')) {
        $loadingTarget = $wireClick;
    }

    if ($loading) {
        $loadingTarget = $loading;
    }
@endphp

<button {{ $attributes->merge(['type' => 'submit'])->class([
    'btn',
    'btn-primary' => $primary,
    'btn-secondary' => $secondary,
    'btn-warning' => $warning,
    'btn-lg' => $lg,
]) }} wire:loading.attr="disabled">
    @if($loading && $loadingTarget)
        <span class="loading loading-spinner"></span>
    @endif
    {{ $icon }}

    {{ $slot }}
</button>
