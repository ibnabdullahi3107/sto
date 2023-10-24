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
        $header=["custom_id","full_name","organisation",		"phone_number",		"lga",	"ward",	"Address",	"poll_unit"    ];

        $data = (new FastExcel)->import($this->file);
        $randomNumber = rand(1, 10);

        foreach($data as $rowData){
            // $row = array_combine($header,$rowData);
            //   dd($rowData);

            try {
                //code...


                $client = new Client([
                    'custom_id' => $rowData[0],

                    'name' => $rowData[1],
                    'organization' => $rowData[2],

                    'phone_number' => $rowData[3],
                    'LGA' => $rowData[4],
                    'ward' => $rowData[5],

                    'address' => $rowData[6],
                    'poll_unit' => $rowData[7],
                    'no_of_dependent' => $randomNumber,




                ]);

                $client->save();
                // unlink($this->file);


            } catch (\Throwable $th) {
                 throw $th;
            }



        }


        //  dd($excell_rows->toArray());
        // $data=$this->file->toArray();



        //
    }
}
