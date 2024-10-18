<?php

declare(strict_types = 1);

namespace App\Actions\Register;

use App\Models\Register;

class BrowserRegister
{
    public function handle(): ?Register
    {
        if (blank($register = $this->getBrowser())) {
            return null;
        }

        $cookieRegisterArray = explode('-', $register);
        $storeRegister       = array_pop($cookieRegisterArray);
        $nameRegister        = implode('-', $cookieRegisterArray);

        $modelRegister = Register::query()
            ->where(function ($query) use ($nameRegister) {
                $query->whereName($nameRegister);
            })
            ->whereStoreId($storeRegister)
            ->first();

        if (blank($modelRegister)) {
            $this->removeRegisterBrowser();

            return null;
        }

        if ($modelRegister && $modelRegister->is_unlink) {
            $this->removeRegisterBrowser();
            $modelRegister->update(['is_unlink' => null]);

            return null;
        }

        return $modelRegister;
    }

    protected function getBrowser(): ?string
    {
        return \Cookie::queued('register') ?: \Cookie::get('register');
    }

    protected function removeRegisterBrowser(): void
    {
        \Cookie::forget('register');
    }
}
