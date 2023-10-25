<?php

namespace App\Http\Controllers;

use App\Models\TB;
use App\Http\Requests\StoreTBRequest;
use App\Http\Requests\UpdateTBRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
use Carbon\Carbon;


class TBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
    }
    public function excell(){

        return view('excell_upload');
    }
    public function excellUpload(Request $request){



           // Get the uploaded file
           $file = $request->file('file');
           // $file = $request->file('file');
           $tempPath = $file->getRealPath();

           $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

           $rows = [];
            $header = null;
            if($extension=='csv'){
                    $handle = fopen($tempPath, "r");
                if ($handle !== false) {
                    while (($row = fgetcsv($handle)) !== false) {
                        // Store the header in a variable
                        if (!$header) {
                            $header = $row;
                            continue; // Skip the header row
                        }
                        $rows[] = $row;
                    }
                    fclose($handle);
                }


            }
            else{
                $header = null;
                $rows = (new FastExcel)->withoutHeaders()->import($tempPath, function ($row) use (&$header) {
                    // Store the header in a variable
                    if (!$header) {
                        $header = $row;
                        return false; // Skip the header row
                    }

                    if (isset($row[5]) && $row[5] instanceof \DateTimeImmutable) {
                        $row[5] = Carbon::instance($row[5])->toDateString(); // Convert to a string date
                        $row[7] = Carbon::instance($row[7])->toDateString(); // Convert to a string date
                    }


                    return $row;
                });


            }

           // Read the file using FastExcel and remove the header

           // Chunk the rows into groups of 1000 and save them to a pending-files folder
           $chunks = collect($rows)->chunk(1000);
           $chunkIndex = 0;
           foreach ($chunks as $chunk) {
               $fileName = 'pending-files/' . time() . '-' . ++$chunkIndex .'.'. $extension;
               $path = resource_path( $fileName);
               (new FastExcel($chunk))->export($path);


           }

           (new TB())->parseXlsxImport($extension);
        //    dd('done');
           return to_route('tb.excell')->with('success_message', 'Records Uploaded successful.');


        // return view('excell_upload')->with('success_message', 'Beneficiary data created successfully');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTBRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TB $tB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TB $tB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTBRequest $request, TB $tB)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TB $tB)
    {
        //
    }
}
