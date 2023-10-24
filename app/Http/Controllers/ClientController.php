<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;

class ClientController extends Controller
{


public function generateQrcode (){
    $clients= Client::all();
    return view('qrcode',compact('clients'));

}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients= Client::all();
        return view('all_clients',compact('clients'));

    }

    public function excell(){

        return view('excell_upload');
    }
    public function excellUpload(Request $request){

           // Get the uploaded file
           $file = $request->file('file');
           // $file = $request->file('file');
           $tempPath = $file->getRealPath();

           // Read the file using FastExcel and remove the header
           $header = null;
           $rows = (new FastExcel)->withoutHeaders()->import($tempPath, function ($row) use (&$header) {
               // Store the header in a variable
               if (!$header) {
                   $header = $row;
                   return false; // Skip the header row
               }
               return $row;
           });
           // Chunk the rows into groups of 1000 and save them to a pending-files folder
           $chunks = collect($rows)->chunk(1000);
           $chunkIndex = 0;
           foreach ($chunks as $chunk) {
               $fileName = 'pending-files/' . time() . '-' . ++$chunkIndex . '.xlsx';
               $path = resource_path( $fileName);
               (new FastExcel($chunk))->export($path);
           }

           (new Client())->parseXlsxImport($header);
        //    dd('done');
           return to_route('client.excell')->with('success_message', 'Allocation accepted successful.');


        // return view('excell_upload')->with('success_message', 'Beneficiary data created successfully');

    }
    public function csvUpload(Request $request)
    {
        // dd($request);
        // Get the uploaded file
        $file = $request->file('file');
         dd($file);

        // Read the file using FastExcel and remove the header
        $header = null;
        $rows = (new FastExcel)->withoutHeaders()->import($file, function ($row) use (&$header) {
            // Store the header in a variable
            if (!$header) {
                $header = $row;
                return false; // Skip the header row
            }
            return $row;
        });

        dd($row);
        // Chunk the rows into groups of 1000 and save them to a pending-files folder
        $chunks = collect($rows)->chunk(1000);
        $chunkIndex = 0;
        foreach ($chunks as $chunk) {
             dd($header);
            $fileName =resource_path('pending-files/' . time() . '-' . ++$chunkIndex . '.xlsx');

            (new FastExcel($chunk))->export($fileName);
        }
         //getting the array of all files path
         $path = resource_path('pending-files/*.xlsx');
         $files = glob($path);
         $version = 3;//will be removed later
         $version++;


         Artisan::call('queue:restart');
    //

        // Queue a job to process each row
        foreach ($chunks as $chunk) {

            foreach ($chunk as $row) {
                //   dd($row);
                // $keys_array = explode(",", $header);
                // $values_array = explode(",", $row);
                // // dd($keys_array);
                // $combined_array = array_combine($header, $row);

                dd($combined_array );
                ProcessExcelRow::dispatch(array_combine($header, $row));
            }
        }

        return response()->json(['success' => true]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'custom_id' => 'required',
            'name' => 'required',
            'phone_number' => 'required',
            'no_of_dependent' => 'required|min:1',
            'LGA' => 'required',
            'ward' => 'required',
            'poll_unit' => 'required',
            'address' => 'required',
            'role'=> 'required|in:state,local'
        ]);

        // Create a new beneficiary record
        try {
            Client::create($validatedData);
        } catch (Throwable $th) {
            // Log the exception
            logger()->error($th);
            // Return an error message
            return response()->json(['message' => 'Error creating client'], 400);
        }

        // Redirect back with a success message
        return redirect()->route('client.index')->with('success_message', 'Beneficiary added successfully');

    }






    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
