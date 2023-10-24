<x-app-layout>
    <div class="content-body text-center">
        <div class="container my-4">
            <h2>
                {{--  --}}
                Beneficiary Dispenses</h2>
            <div class="progress" style="height: 9px">
                <div class="progress-bar bg-primary wow  progress-" style="width: 100%;" role="progressbar"><span class="sr-only">60% Complete</span>
                </div>
            </div>
        </div>
        <!-- Check if there are dispense records -->
        @if($dispenses)

        <div class="row justify-content-center">

            <div class="col-10">
                <div class="card border-primary">
                    <div class="card-header py-3">

                       @if ($client)
                       <h4>{{ $client->name }}</h4>
                       <strong>{{ $client->custom_id }}</strong>
                       <h5>{{ $client->address }}</h5>
                       <h5>{{ $client->phone_number }}</h5>

                       @endif

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Dispense Card Table</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle">
                                <thead>
                                    <tr>

                                        <th scope="col">Date</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Description</th>


                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dispenses as $dispense)
                                        <tr>
                                            <td>{{$dispense->created_at}}</td>
                                            <td>{{ $dispense->product->name }}</td>
                                            <td>{{ $dispense->quantity }}</td>
                                            <td>{{ $dispense->product->unit }}</td>
                                            <td>{{ $dispense->Description }}</td>


                                            <!-- Assuming you have a method to calculate the amount -->
                                            <td>
                                                <!-- Your action buttons here -->
                                                 <!-- Small modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-sm"  >Delete  <i class="fa fa-close color-muted"></i></button>
                                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete This transaction</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Are you sure you want to permanently delete this transaction.</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close <i class="fa fa-close color-muted"></i></button>
                                                    <a href="{{ route('dispense.destroy', $dispense->id) }}" data-toggle="tooltip" data-placement="top" title="Delete" class="mx-3 btn btn-danger">
                                                      Yes
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    {{-- @php
                        $dispense= new  App\Models\Dispense();
                    @endphp --}}
                    {{-- <div class="card-footer"><h2>Total Amount : <strong class="text-dark">{{ $dispense->calculateAmount() }}</strong></strong></h2>
                    </div> --}}
                </div>
            </div>

        </div>

        @endif
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-widget">
                    <div class="card-body gradient-4">
                        <h3 class="text-white">Issue New Item To {{$client->name}}</h3>
                    </div>
                </div>
                <form method="POST" action="{{ route('dispense.store') }}">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" name="beneficiary_id" class="tdl-new2 form-control" placeholder="Enter Beneficiary ID"  required value="{{ $client->id }}" hidden>
                            </div>
                            @error('beneficiary_id')
                                <div class="alert alert-danger">
                                    <strong class="text-bold text-left">Beneficiary Id not exist</strong>
                                </div>
                            @enderror

                            <div class="input-group mb-3">
                                <select name="product_id" class="form-control">
                                    <option value="">-- Select Product --</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                            {{ $product->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <input type="number" name="quantity" class="tdl-new2 form-control" placeholder="Enter Quantity" required value="{{ old('quantity') }}">
                            </div>

                            <div class="input-group mb-3">
                                <textarea name="description" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Dispense</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>







    </div>
</x-app-layout>
