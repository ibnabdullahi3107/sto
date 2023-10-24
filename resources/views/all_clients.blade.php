<x-app-layout>
    <div class="content-body text-center">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10 p-4">
                <div class="card">
                    <div class="card-header mt-3">
                        <h4 class="card-title">Beneficiaries</h4>
                        <a href="{{ route('client.create') }}" class="btn btn-success float-right">Create</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold text-primary">Name</th>
                                        <th class="font-weight-bold text-success">Phone Number</th>
                                        <th class="font-weight-bold text-success">Dependant</th>
                                        <th class="font-weight-bold text-success">Organization</th>


                                        <th class="font-weight-bold text-success">Ward</th>
                                        <th class="font-weight-bold text-success">Polling Unit</th>
                                        <th class="font-weight-bold text-primary">Address</th>
                                        {{-- <th class="font-weight-bold text-success">Created At</th>
                                        <th class="font-weight-bold text-success">Updated At</th> --}}
                                        <th class="font-weight-bold text-danger">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clients as $client)
                                    <tr>
                                        <td class="font-weight-bold text-dark">{{ $client->name }}</td>
                                        <td class="font-weight-bold text-dark">{{ $client->phone_number }}</td>
                                        <td class="font-weight-bold text-dark">{{ $client->no_of_dependent }}</td>
                                        <td class="font-weight-bold text-dark">{{ $client->organization }}</td>
                                        <td class="font-weight-bold text-dark">{{ $client->ward }}</td>
                                        <td class="font-weight-bold text-dark">{{ $client->poll_unit }}</td>

                                        <td class="font-weight-bold text-primary">{{ $client->address }}</td>
                                        {{-- <td>{{ $client->created_at }}</td>
                                        <td>{{ $client->updated_at }}</td> --}}
                                        <td>
                                        <!-- Add action buttons for edit and delete -->

                                            <a href="" class="btn btn-primary">Edit</a>
                                                <a href="" class="btn btn-danger">Delete</a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
