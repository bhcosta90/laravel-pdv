@props([
    'label',
    'header' => null,
])

@php
    $model = $attributes->wire('model');
    $id = $id ?? md5($model);
    $name ??= $model->value ?: 'open';
    if  (blank($header)){
        $header = $label;
    }

    $maxWidth = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
    ][$maxWidth ?? '2xl'];
@endphp

<div>
    <div
        x-data="{ show: @entangle($name) }"
        x-on:close.stop="show = false"
        x-on:keydown.escape.window="show = false"
    >
        <div x-show="show"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
        >
            <div x-on:click="show = false" class="fixed inset-0 bg-black opacity-50" x-show="show"></div>

            <dialog class="modal" open>
                <div class="modal-box p-0 m-0 sm:w-full {{ $maxWidth }}">
                    <div class="border-b border-gray-400 py-3 px-4">
                        <div class="flex items-center justify-between">
                            <div class="font-bold text-xl">{{ $header }}</div>
                            <span x-on:click="show = false"
                                  class="btn btn-xs btn-outline">
                                x
                            </span>
                        </div>
                    </div>
                    <div class="p-4">
                        {{ $slot }}
                    </div>
                </div>
            </dialog>
        </div>
    </div>
</div>
