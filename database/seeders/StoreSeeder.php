<?php

declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\Enum\UserRole;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        \DB::transaction(function () {
            Store::factory()
                ->hasUsers(4, new Sequence(
                    ['email' => 'owner@gmail.com', 'role' => UserRole::Owner],
                    ['email' => 'manager@gmail.com', 'role' => UserRole::Manager],
                    ['email' => 'employee@gmail.com', 'role' => UserRole::Employee],
                    ['email' => 'salesperson@gmail.com', 'role' => UserRole::Salesperson],
                ))
                ->hasRegisters(3)
                ->create();

            Store::factory(2)
                ->hasUsers(3)
                ->hasRegisters(3)
                ->create();
        });
    }
}
