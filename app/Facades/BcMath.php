<?php

declare(strict_types = 1);

namespace App\Facades;

use App\Support\BcMath as BcMathSupport;
use Illuminate\Support\Facades\Facade;

/**
 * @method static BcMathSupport make(int | float $value, int $scale = 2)
 */
class BcMath extends Facade
{
    #[\Override]
    protected static function getFacadeAccessor(): string
    {
        return BcMathSupport::class;
    }
}
