<?php

namespace App\Models;

use App\Models\HivTreatment;
use App\Models\TbManagement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'state',
        'lga',
        'lga_of_residence',
        'facility_name',
        'datim_id',
        'patient_id',
        'hospital_number',
        'unique_id',
        'household_unique_no',
        'ovc_unique_id',
        'sex',
        'target_group',
        'current_weight',
        'pregnancy_status',
        'date_of_birth',
        'age',
        'care_entry_point',
        'date_of_registration',
        'enrollment_date',
    ];

    public function hivTreatments()
    {
        return $this->hasMany(HivTreatment::class);
    }

    public function tbManagements()
    {
        return $this->hasMany(TbManagement::class);
    }

}
