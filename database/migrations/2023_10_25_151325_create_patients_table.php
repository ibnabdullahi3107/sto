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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('lga_of_residence')->nullable();
            $table->string('facility_name')->nullable();
            $table->string('datim_id')->nullable();
            $table->string('patient_id')->nullable();
            $table->string('hospital_number')->nullable();
            $table->string('unique_id')->nullable();
            $table->string('household_unique_no')->nullable();
            $table->string('ovc_unique_id')->nullable();
            $table->string('sex')->nullable();
            $table->string('target_group')->nullable();
            $table->float('current_weight')->nullable();
            $table->string('pregnancy_status')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('age')->nullable();
            $table->string('care_entry_point')->nullable();
            $table->date('date_of_registration')->nullable();
            $table->date('enrollment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
