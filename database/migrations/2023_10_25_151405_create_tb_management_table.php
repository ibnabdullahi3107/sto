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
        Schema::create('tb_managements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->date('date_of_tb_screening')->nullable();
            $table->string('tb_status_at_last_visit')->nullable();
            $table->string('tb_screening_outcome')->nullable();
            $table->date('date_of_tb_sample_collection')->nullable();
            $table->string('tb_diagnostic_test_type')->nullable();
            $table->date('date_of_tb_diagnostic_result_received')->nullable();
            $table->string('tb_diagnostic_result')->nullable();
            $table->date('date_of_start_of_tb_treatment')->nullable();
            $table->string('tb_treatment_type')->nullable();
            $table->date('date_of_completion_of_tb_treatment')->nullable();
            $table->string('tb_treatment_outcome')->nullable();
            $table->date('date_of_tb_lam')->nullable();
            $table->string('tb_lam_result')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_management');
    }
};
