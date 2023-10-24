<x-app-layout>
    <div class="content-body text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8 p-4">
                <div class="card">
                    <div class="card-header mt-3">
                        <h4 class="card-title">All Users</h4>
                        <a href="{{ route('user.create') }}" class="btn btn-success float-right">Create</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold text-primary">Name</th>
                                        <th class="font-weight-bold text-primary">Phone Number</th>
                                        <th class="font-weight-bold text-primary">Address</th>



                                        <th class="font-weight-bold text-primary">Previllages</th>
                                        <th class="font-weight-bold text-success">Created At</th>
                                        <th class="font-weight-bold text-success">Updated At</th>
                                        <th class="font-weight-bold text-danger">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td class="font-weight-bold text-dark">{{ $user->name }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td>
                                            <!-- Edit and Delete buttons -->
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $user->id }}">Edit</button>
                                            {{-- <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $user->id }}">Delete</button> --}}
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $user->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Edit  User</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Edit form goes here -->
                                                    <div class="basic-form">
                                                        <form method="POST" action="{{ route('user.edit') }}">
                                                            @csrf <!-- Add CSRF token field for security -->
                                                                <input type="text" name="id" class="form-control" value="{{ $user->id }}" hidden>


                                                            <div class="input-group mb-3">
                                                                <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <select class="form-control" name="role" id="">
                                                                    <option value="{{$user->role}}" selected>{{$user->role}}</option>
                                                                    <option value="admin">Admin</option>
                                                                    <option value="state">State</option>
                                                                    <option value="local">Local</option>
                                                                </select>
                                                            </div>

                                                        <div class="input-group mb-3">
                                                            <textarea type="text" id="address" class="form-control block mt-1 w-full" name="address" :value="old('address')" value="{{$user->address}}" required autofocus placeholder="Address">{{$user->address}}</textarea>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="phone_number" value="{{$user->phone_number}}" class="form-control" placeholder="Name">
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
                                    {{-- <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $user->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{ $user->id }}">Delete Local Government</h5>
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
                                                    <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
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
