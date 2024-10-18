<div>
    <x-button
        warning
        x-on:click="$wire.set('open', true)">
        @lang('Selecionar o caixa')
    </x-button>

    <x-modal wire:model="open" label="Informe o caixa" warning>
        <form class="flex justify-between join" wire:submit="submit">
            <x-select class="join-item" :collection="$this->registers" wire:model="register" />
            <x-button class="join-item" primary>
                @lang('Informar')
            </x-button>
        </form>
    </x-modal>
</div>
