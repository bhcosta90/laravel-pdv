<?php

declare(strict_types = 1);

namespace App\Rules;

use App\Models\Enums\RegisterActivityTransaction;
use App\Models\Register;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RegisterValueRule implements ValidationRule
{
    public function __construct(protected ?int $transaction, protected ?float $value)
    {
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($this->transaction
            && $this->value
            && ($type = RegisterActivityTransaction::from($this->transaction))
            && $type === RegisterActivityTransaction::Debit
            && ($objRegister = Register::find($value))
            && bcsub((string) $objRegister->value, (string) $this->value) < 0
        ) {
            $fail('Insufficient balance');
        }
    }
}
