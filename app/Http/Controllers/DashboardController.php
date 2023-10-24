<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\User;
use App\Models\LGA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $totalDependents = Client::sum('no_of_dependent');
        $userCount = User::count();
        $lga_count = LGA::count();
        $lgas= LGA::all();
        // dd($lgas);
        // Retrieve the earliest and latest user creation dates as DateTime objects
        $earliestDate = new \DateTime(User::min('created_at'));
        $latestDate = new \DateTime(User::max('created_at'));

        // Format the dates as "M Y" (e.g., Jan 2019 - Mar 2019)
        $dateRange = $earliestDate->format('M Y') . ' - ' . $latestDate->format('M Y');

        // Retrieve products
        $products = Product::all();

        $lgasData = DB::table('clients')
        ->select('lga', DB::raw('count(*) as total_clients'))
        ->groupBy('lga')
        ->get();
        $clientCount = Client::count();
        // Replace with your actual API endpoint



        // dd($clientCount);
            // Retrieve the count of unique wards from the Client table
            $wardCount = Client::distinct('ward')->count('ward');
            $ward_client_data = Client::select('ward', \DB::raw('COUNT(*) as ward_count'))
        ->groupBy('ward')
        ->get();

        return view('dashboard', compact('clientCount', 'wardCount', 'totalDependents', 'userCount', 'dateRange', 'products', 'lgasData','ward_client_data','lgas','lga_count'));
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
