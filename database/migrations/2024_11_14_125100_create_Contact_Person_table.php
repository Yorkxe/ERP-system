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
        Schema::create('Contact_Person', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Creator');
            $table->foreign('Creator')->references('id')->on('users');
            $table->string('Name');
            $table->string('Phone');
            $table->string('Job_Title');
            $table->string('Company');
            $table->foreign('Company')->references('Name')->on('Company');
            $table->unsignedBigInteger('Assets');
            $table->text('Description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Contact_Person');
    }
};
