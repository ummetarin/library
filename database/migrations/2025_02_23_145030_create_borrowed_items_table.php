<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('borrowed_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->string('payment_method');
            $table->timestamp('borrowed_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowed_item');
    }
};
