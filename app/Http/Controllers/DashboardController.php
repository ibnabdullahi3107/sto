<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use App\Models\TB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //count total patient
        $total_patient= TB::all()->count();
        //counting positive patient
        $total_positive_patient = TB::where('tb_status','positive')->count();
       //using raw querry to show my knowledge in manuplating sql query
        $total_negative_patient = DB::select("SELECT COUNT(*) as count FROM t_b_s WHERE tb_status = 'negative'")[0]->count;
        $total_unknown_status = TB::where('tb_status','unknown')->count();


        //age grouping
        $ageGroups = DB::select("SELECT
        IF(age BETWEEN 0 AND 17, 'Child', IF(age BETWEEN 18 AND 64, 'Adult', 'Senior')) as age_group,
        COUNT(*) as count
        FROM t_b_s
        GROUP BY age_group;
    ");
            // dd($ageGroups);




        $viral_age_results = DB::select('SELECT age, viral_load FROM t_b_s');
        $process = new Process(['python', '/path/to/your_script.py']);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

       





        // Retrieve the earliest and latest user creation dates as DateTime objects
        $earliestDate = new \DateTime(User::min('created_at'));
        $latestDate = new \DateTime(User::max('created_at'));







        // dd($clientCount);
            // Retrieve the count of unique wards from the Client table




            return view('dashboard', compact('total_patient','total_positive_patient', 'total_negative_patient','total_unknown_status' , 'ageGroups' ));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
