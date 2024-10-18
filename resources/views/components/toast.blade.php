@props(['success' => false])
<div {{ $attributes->class([
    'alert',
    'alert-success' => $success,
]) }} x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition>
    <span x-html="alert.message"></span>
</div>
