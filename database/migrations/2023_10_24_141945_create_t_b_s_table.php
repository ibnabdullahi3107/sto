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
        Schema::create('t_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('gender');
            $table->date('diagnosis_date');
            $table->string('tb_status');
            $table->date('treatment_start_date');
            $table->string('retention_status');
            $table->string('negative_outcome')->nullable();
            $table->string('tpt_status');
            $table->integer('viral_load')->nullable();
            $table->string('blood_pressure')->nullable();
            $table->integer('height_cm')->nullable();
            $table->integer('weight_kg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_b_s');
    }
};
