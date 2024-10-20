<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('description');
            $table->string('ean');
            $table->unsignedBigInteger('sell_price');
            $table->unsignedBigInteger('cash_buy');
            $table->unsignedBigInteger('quantity');
            $table->boolean('is_disabled')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['store_id', 'ean']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
