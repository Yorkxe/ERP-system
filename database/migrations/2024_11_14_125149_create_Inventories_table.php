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
        Schema::create('Inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Creator');
            $table->foreign('Creator')->references('id')->on('users');
            $table->string('Name');
            $table->String('Place_Production');
            $table->unsignedBigInteger('Price');
            $table->unsignedBigInteger('Quantity')->default(0);
            $table->text('Description')->nullable();
            $table->string('Image')->nullable();
            $table->index('Creator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Inventories');
    }
};
