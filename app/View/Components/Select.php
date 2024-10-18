<?php

declare(strict_types = 1);

namespace App\View\Components;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Select extends Component
{
    public ?Collection $collection = null;

    public function __construct(?Collection $collection = null)
    {
        if ($collection) {
            $this->collection = $collection;
        }
    }

    public function render(): string
    {
        return <<<'blade'
            <select {{ $attributes->merge([
                'class' => 'w-full'
            ]) }}>
                <option>@lang('Selecione...')</option>
                @if ($collection)
                    @foreach ($collection->pluck('name', 'id') as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                @endif
            </select>
blade;
    }
}
