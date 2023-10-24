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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('custom_id');
            $table->string('name');
            $table->integer('no_of_dependent');
            $table->text('phone_number')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('LGA');
            $table->text('ward')->nullable();
            $table->text('poll_unit')->nullable();
            $table->string('organization')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
