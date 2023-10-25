<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TbManagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'date_of_tb_screening',
        'tb_status_at_last_visit',
        'tb_screening_outcome',
        'date_of_tb_sample_collection',
        'tb_diagnostic_test_type',
        'date_of_tb_diagnostic_result_received',
        'tb_diagnostic_result',
        'date_of_start_of_tb_treatment',
        'tb_treatment_type',
        'date_of_completion_of_tb_treatment',
        'tb_treatment_outcome',
        'date_of_tb_lam',
        'tb_lam_result',
    ];

public function patient()
{
    return $this->belongsTo(Patient::class);
}

}
