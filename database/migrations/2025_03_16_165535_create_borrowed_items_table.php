<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('borrowed_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->string('payment_method');
            $table->timestamp('borrowed_at')->useCurrent();
            $table->date('return_date'); // Added return_date
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('borrowed_items');
    }
};
