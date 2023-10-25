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
        Schema::create('hiv_treatments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            // Add foreign key constraint
            $table->foreign('patient_id')->references('id')->on('patients');
            // Add HIV treatment-related fields
            $table->date('art_start_date')->nullable();
            $table->date('last_pickup_date')->nullable();
            $table->integer('months_of_arv_refill')->nullable();
            $table->string('regimen_line_at_art_start')->nullable();
            $table->string('regimen_at_art_start')->nullable();
            $table->date('date_of_start_of_current_art_regimen')->nullable();
            $table->string('current_regimen_line')->nullable();
            $table->string('current_art_regimen')->nullable();
            $table->string('clinical_staging_at_last_visit')->nullable();
            $table->date('date_of_last_cd4_count')->nullable();
            $table->float('last_cd4_count')->nullable();
            $table->date('date_of_viral_load_sample_collection')->nullable();
            $table->date('date_of_current_viralload_result_sample')->nullable();
            $table->float('current_viral_load')->nullable();
            $table->date('date_of_current_viral_load')->nullable();
            $table->string('viral_load_indication')->nullable();
            $table->string('viral_load_eligibility_status')->nullable();
            $table->date('date_of_viral_load_eligibility_status')->nullable();
            $table->string('current_art_status')->nullable();
            $table->date('date_of_current_art_status')->nullable();
            $table->string('cause_of_death')->nullable();
            $table->string('va_cause_of_death')->nullable();
            $table->string('previous_art_status')->nullable();
            $table->date('confirmed_date_of_previous_art_status')->nullable();
            $table->string('art_enrollment_setting')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hiv_treatments');
    }
};
