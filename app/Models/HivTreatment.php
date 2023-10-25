<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HivTreatment extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'art_start_date',
        'last_pickup_date',
        'months_of_arv_refill',
        'regimen_line_at_art_start',
        'regimen_at_art_start',
        'date_of_start_of_current_art_regimen',
        'current_regimen_line',
        'current_art_regimen',
        'clinical_staging_at_last_visit',
        'date_of_last_cd4_count',
        'last_cd4_count',
        'date_of_viral_load_sample_collection',
        'date_of_current_viralload_result_sample',
        'current_viral_load',
        'date_of_current_viral_load',
        'viral_load_indication',
        'viral_load_eligibility_status',
        'date_of_viral_load_eligibility_status',
        'current_art_status',
        'date_of_current_art_status',
        'cause_of_death',
        'va_cause_of_death',
        'previous_art_status',
        'confirmed_date_of_previous_art_status',
        'art_enrollment_setting',
    ];


public function patient()
{
    return $this->belongsTo(Patient::class);
}
}
