<x-app-layout>
    <div class="content-body text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8 p-4">
                <div class="card">
                    <div class="card-header mt-3">
                        <h4 class="card-title">All Local Governments</h4>
                        <a href="{{ route('add_lga') }}" class="btn btn-success float-right">Create</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold text-primary">Name</th>
                                        <th class="font-weight-bold text-primary">Beneficiaries</th>
                                        <th class="font-weight-bold text-success">Created At</th>
                                        <th class="font-weight-bold text-success">Updated At</th>
                                        <th class="font-weight-bold text-danger">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lgas as $lga)
                                    <tr>
                                        <td class="font-weight-bold text-dark">{{ $lga->name }}</td>
                                        <td>{{ $lga->beneficiaries }}</td>
                                        <td>{{ $lga->created_at }}</td>
                                        <td>{{ $lga->updated_at }}</td>
                                        <td>
                                            <!-- Edit and Delete buttons -->
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $lga->id }}">Edit</button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $lga->id }}">Delete</button>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal{{ $lga->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $lga->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Edit Local Government</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Edit form goes here -->
                                                    <div class="basic-form">
                                                        <form method="POST" action="{{ route('lga.edit') }}">
                                                            @csrf <!-- Add CSRF token field for security -->
                                                                <input type="text" name="id" class="form-control" value="{{ $lga->id }}" hidden>


                                                            <div class="input-group mb-3">
                                                                <input type="text" name="name" value="{{$lga->name}}" class="form-control" placeholder="Name">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <input type="number" name="beneficiaries" value="{{$lga->beneficiaries}}" class="form-control" placeholder="Number of Beneficiaries">
                                                            </div>

                                                            <div class="input-group">
                                                                <button class="btn btn-primary" type="submit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- You can add your edit form fields here -->

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteModal{{ $lga->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $lga->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{ $lga->id }}">Delete Local Government</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Delete confirmation message -->
                                                    Are you sure you want to delete this record?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <a href="{{route('lga.delete',$lga->id)}}" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
