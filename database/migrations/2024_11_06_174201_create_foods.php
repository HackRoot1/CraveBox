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
        Schema::create('foods', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name', 255)->nullable(false);
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2)->nullable(false);
            $table->string('category', 255)->nullable(false);
            $table->text('ingredient')->nullable(false); 
            $table->string('image', 255)->nullable();
            $table->boolean('is_avilable')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
