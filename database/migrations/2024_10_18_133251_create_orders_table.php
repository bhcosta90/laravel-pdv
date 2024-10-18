<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id');
            $table->foreignId('register_id');
            $table->foreignId('user_id');
            $table->unsignedBigInteger('total');
            $table->unsignedBigInteger('sub_total');
            $table->unsignedInteger('discount_value')->nullable();
            $table->unsignedBigInteger('discount_price')->nullable();
            $table->unsignedBigInteger('change_due')->nullable();
            $table->unsignedBigInteger('change_tendered')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
