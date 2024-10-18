<div class="flex h-screen bg-primary">
    <div class="w-[45%] sm:w-[60%] p-2 pr-1">
        <div class="h-full flex flex-col bg-secondary">
            <div class="bg-neutral-content py-3 px-1.5 text-2xl flex justify-between items-center">
                <div>@lang('Lista de produtos')</div>
                <livewire:store.register.set-register />
            </div>
            <div class="flex-grow overflow-y-auto p-4" id="table-container">
                oi
            </div>

            <div class="p-4">
                <div class="flex justify-between flex-row items-center">
                    <div class="space-y-4">
                        <div>
                            <div class="text-3xl flex items-center gap-x-2">
                                <div>@lang('Total de itens: :total', ['total' => $this->totalItens])</div>
                                <span class="text-muted text-xl">
                                    ({{ $register?->name }})
                                </span>
                            </div>
                            @if($register?->products->count())
                                <div class="text-6xl">{{ number($this->total) }}</div>
                            @endif
                        </div>

                        <div class="flex justify-between gap-x-4">
                            <x-button
                                :disabled="$this->disableButton"
                                wire:click="submit"
                                x-on:keydown.window.f2="$wire.submit"
                            >
                                @lang('(F2) Fechar venda')
                            </x-button>
                            <x-button
                                secondary
                            >
                                @lang('(Alt) Buscar produto')
                            </x-button>
                        </div>
                    </div>
                    <div>
                        @switch($this->validateExistRegister)
                            @case(2)
                                @lang('Abrir o caixa')
                                @break
                            @case(null)
                                <div>
                                    <a
                                        class="underline text-red-600"
                                        wire:navigate>
                                        @lang('Executar Sangria')
                                    </a>

                                    <a
                                        class="underline text-red-600"
                                        wire:navigate>
                                        @lang('Fechar')
                                    </a>
                                </div>
                        @endswitch
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-[55%] p-2 pl-1">
        <div class="h-full flex flex-col bg-secondary overflow-y-auto">
            <div class="p-4">
                <div class="lg:grid lg:grid-cols-2 gap-5 grow">
                </div>
            </div>
        </div>
    </div>
</div>
