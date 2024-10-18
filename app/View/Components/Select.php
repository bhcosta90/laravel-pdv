<?php

declare(strict_types = 1);

namespace App\View\Components;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\View\Component;

class Select extends Component
{
    public array $datas = [];

    public function __construct(?HasMany $collection = null)
    {
        if ($collection) {
            $this->datas = $collection->get()->pluck('name', 'id')->toArray();
        }
    }

    public function render(): string
    {
        return <<<'blade'
            <select {{ $attributes->merge([
                'class' => 'w-full'
            ]) }}>
                <option value="">@lang('Selecione...')</option>
                @if ($datas)
                    @foreach ($datas as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                @endif
            </select>
blade;
    }
}
