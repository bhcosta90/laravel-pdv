<?php

declare(strict_types = 1);

namespace App\Support;

class BcMath
{
    protected float $value = 0;

    protected int $scale = 2;

    public static function make(float $value = 0, int $scale = 2): self
    {
        $obj        = new self();
        $obj->scale = $scale;
        $obj->value = $value;

        return $obj;
    }

    public function add(int | float $value, int $scale = 2): self
    {
        $this->value = (float) bcadd((string) $this->value, (string) $value, $scale);

        return $this;
    }

    public function sub(int | float $value, int $scale = 2): self
    {
        $this->value = (float) bcsub((string) $this->value, (string) $value, $scale);

        return $this;
    }

    public function mul(int | float $value, int $scale = 2): self
    {
        $this->value = (float) bcmul((string) $this->value, (string) $value, $scale);

        return $this;
    }

    public function div(int | float $value, int $scale = 2): self
    {
        $this->value = (float) bcdiv((string) $this->value, (string) $value, $scale);

        return $this;
    }

    public function toFloat(): float
    {
        return $this->value;
    }

    public function toInt(): int
    {
        return (int) $this->value;
    }
}
