<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
use App\Jobs\ExcelUpload;

class TB extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'first_name',
        'last_name',
        'age',
        'gender',
        'diagnosis_date',
        'tb_status',
        'treatment_start_date',
        'retention_status',
        'negative_outcome',
        'tpt_status',
        'viral_load',
        'blood_pressure',
        'height_cm',
        'weight_kg',
    ];

    public function parseXlsxImport($extension)
    {
        $path = resource_path('pending-files/*.'.$extension);
        $files = glob($path);



        Artisan::call('queue:restart');

        foreach ($files as $file) {
            // Read the Excel file

            ExcelUpload::dispatch($file);



        }
    }



}
