<?php

declare(strict_types = 1);

namespace App\Actions\Register;

use App\Exceptions\RegisterException;
use App\Models\Register;
use App\Rules\StoreEnabledRule;

class SetRegister
{
    public function handle(array $data): Register
    {
        \Validator::make($data, [
            'store'    => ['required', new StoreEnabledRule($store = store()->id, 'stores')],
            'user'     => ['required', new StoreEnabledRule($store, 'users')],
            'register' => ['required', new StoreEnabledRule($store, 'registers')],
        ])->validate();

        $modelRegister = Register::find($data['register']);

        if ($modelRegister->linked_by) {
            throw new RegisterException('Register already linked');
        }

        $cookie = \Cookie::forever('register', sprintf(
            "%s-%s",
            $modelRegister->name,
            store()->id,
        ));

        \Cookie::queue($cookie);

        return $modelRegister;
    }
}
