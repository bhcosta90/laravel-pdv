<?php

declare(strict_types = 1);

use Illuminate\Database\Eloquent\Model;

arch('App\Actions::handle')
    ->expect('App\Actions')
    ->toHaveMethod('handle');

arch('dump')
    ->expect('App')
    ->not->toUse(['die', 'dd', 'dump', 'ds']);

arch('models')
    ->expect('App\Models')
    ->toExtend(Model::class)
    ->ignoring([
        'App\\Models\\Enum',
        'App\\Models\\Cast',
    ]);

arch('http')
    ->expect('App\Http')
    ->toOnlyBeUsedIn('App\Http');
