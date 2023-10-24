<?php

namespace App\Http\Controllers;

use App\Models\Allocation;
use App\Models\Product;
use App\Models\Store;
use App\Models\StoreItems;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve allocations and store items from the database
        $allocations = Allocation::with('transaction')->get();
        $storeItems = StoreItems::get();

        return view('all_allocation', compact('allocations', 'storeItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stores = Store::get();
        $products = Product::get();

        return view('allocation', compact('stores', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function acceptTransfer($allocation_id){
        try {
            //code...

            DB::beginTransaction(); // Start a database transaction

            $allocation=Allocation::find($allocation_id);

            StoreItems::updateOrCreate(
                [
                    'store_id' => $allocation->store_id,
                    'product_id' => $allocation->product_id,
                ],
                [
                    'quantity' => $allocation->quantity, // Add quantity
                ]
            );

             // Create a transaction record with the default 'destination_store' (General Store)
             Transaction::create([
                'from_store' =>1 , // Default ID for General Store
                'destination_store' =>auth()->user()->store_id ,
                'user_id' => auth()->id(), // Assuming you have authentication in place
                'acceptance_status' => 'accepted',
                'item_id' => $allocation->product_id, // Assuming 'item_id' represents the product being transferred
                'allocation_id'=> $allocation->id,
            ]);

            DB::commit(); // Commit the transaction

            // Set success message and redirect
            return to_route('add.allocation')->with('success_message', 'Allocation accepted successful.');


        } catch (\Throwable $e) {
            //throw $th;
            DB::rollBack(); // Rollback the transaction
            return to_route('add.allocation')->with('error_message', 'An error occurred while processing your request: ' . $e->getMessage());


        }


    }

     public function store(Request $request)
     {
         // Validate the request data
         $request->validate([
             'store_id' => 'required|exists:stores,id',
             'product_id' => 'required|exists:products,id',
             'quantity' => 'required|integer|min:1',
         ]);

         try {
             DB::beginTransaction(); // Start a database transaction
             $fromStore = Store::findOrFail($request->input('store_id'));
             $product = Product::findOrFail($request->input('product_id'));

             // Check if the product quantity is sufficient in the 'fromStore'
             if ($product->quantity >= $request->input('quantity')) {
                 // Subtract quantity from the product table in the 'fromStore'
                 $product->quantity -= $request->input('quantity');

                 $product->update();

                 // Create or update a store item record for the 'fromStore'
                 StoreItems::updateOrCreate(
                     [
                         'store_id' => $fromStore->id,
                         'product_id' => $product->id,
                     ],
                     [
                         'quantity' => $request->input('quantity'), // Subtract quantity
                     ]
                 );

                 // Create an allocation record for the 'fromStore'
                $allocation= Allocation::create([
                     'store_id' => $fromStore->id,
                     'product_id' => $product->id,
                     'quantity' => $request->input('quantity'), // add quantity for allocation
                    //  'acceptance' => 'accepted',

                 ]);

                 // Create a transaction record with the default 'destination_store' (General Store)
                 Transaction::create([
                     'from_store' => 1,
                     'destination_store' =>$fromStore->id, // Default ID for General Store
                     'user_id' => auth()->id(), // Assuming you have authentication in place
                     'acceptance_status' => null,
                     'item_id' => $product->id, // Assuming 'item_id' represents the product being transferred
                     'allocation_id'=> $allocation->id,
                 ]);

                 DB::commit(); // Commit the transaction

                 // Set success message and redirect
                 return to_route('add.allocation')->with('success_message', 'Allocation and transfer successful.');
             } else {
                 // Insufficient product quantity
                 DB::rollBack(); // Rollback the transaction
                 return to_route('add.allocation')->with('error_message', 'Insufficient product quantity.');
             }
         } catch (\Exception $e) {
             // An error occurred, rollback the transaction and handle the exception
             DB::rollBack(); // Rollback the transaction
             return to_route('add.allocation')->with('error_message', 'An error occurred while processing your request: ' . $e->getMessage());
         }
     }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Allocation $allocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Allocation $allocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Allocation $allocation)
    {
        //
    }
}
