<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Client;
use App\Models\User;
use App\Models\TB;
use Maatwebsite\Excel\Facades\Excel;


use DB;
use Rap2hpoutre\FastExcel\FastExcel;

class ExcelUpload implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $file;

    /**
     * Create a new job instance.
     */
    public function __construct($file)
    {
        //
        $this->file=$file;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        $data = (new FastExcel)->import($this->file);
        $randomNumber = rand(1, 10);

        try {
            //code...
            foreach($data as $rowData){
                // $row = array_combine($header,$rowData);


                    //code...


                   // Assuming $rowData contains the values for the TB model
                   $diagnosis_date = date('Y-m-d', strtotime($rowData[5]));
                   $treatment_start_date= date('Y-m-d',strtotime($rowData[7]));
                    $tb_data = new TB([
                        'patient_id' => $rowData[0],
                        'first_name' => $rowData[1],
                        'last_name' => $rowData[2],
                        'age' => $rowData[3],
                        'gender' => $rowData[4],
                        'diagnosis_date' => $diagnosis_date,
                        'tb_status' => $rowData[6],
                        'treatment_start_date' => $treatment_start_date,
                        'retention_status' => $rowData[8],
                        'negative_outcome' => $rowData[9],
                        'tpt_status' => $rowData[10],
                        'viral_load' => $rowData[11],
                        'blood_pressure' => $rowData[12],
                        'height_cm' => $rowData[13],
                        'weight_kg' => $rowData[14],
                    ]);

                    $tb_data->save();









            }


            unlink($this->file);

        } catch (\Throwable $th) {
            throw $th;
        }





        //  dd($excell_rows->toArray());
        // $data=$this->file->toArray();



        //
    }
}
