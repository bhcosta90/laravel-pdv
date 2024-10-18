<?php

declare(strict_types = 1);

namespace App\Rules;

use Illuminate\Validation\Rules\Exists;

class StoreEnabledRule extends Exists
{
    public function __construct(int $store, $table, $column = 'id', $disabled = true)
    {
        parent::__construct($table, $column);

        $this->whereNull('deleted_at')
            ->where($table === 'stores' ? 'id' : 'store_id', $store)
            ->when($disabled, fn ($query) => $query->whereNull('is_disabled'));
    }
}
