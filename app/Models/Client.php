<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
use App\Jobs\ExcelUpload;



class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'custom_id',
        'phone_number',
        'LGA',
        'no_of_dependent',
        'address',
        'ward',
        'poll_unit',
        'organization'

    ];


    public function parseXlsxImport($header)
    {
        $path = resource_path('pending-files/*.xlsx');
        $files = glob($path);


        Artisan::call('queue:restart');

        foreach ($files as $file) {
            // Read the Excel file
            //  dd($file);
            // $rows = (new FastExcel)->import($file);
            ExcelUpload::dispatch($file);


            // Access the data
            // foreach ($rows as $row) {
            //     // dd($row);

            //     // Process each row of data
            //     // $row is an associative array representing a row in the Excel file
            // }
        }
    }
}
