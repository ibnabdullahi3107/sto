<x-app-layout>
    <div class="content-body text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6 p-4">
                <div class="card">
                    <div class="card-header mt-2">
                        <h4 class="card-title">Upload Excel file</h4>
                        <a href="{{ route('all_categories') }}" class="btn btn-success float-right">View</a>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method='POST' action='{{ route('client.excell.upload') }}' enctype="multipart/form-data">
                                @csrf
                                <div class="row">


                                    <div class="input-group mb-3">
                                        <div class="text-warning">Please make sure your excell file is of the below format</div>

                                        <label class="form-label form-control">Excell File Format</label>

                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                              </tr>
                                            </tbody>
                                          </table>

                                        <input type="file" class="form-control" name="file" class="form-control border p-2" >
                                        @error('csv')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>


                                </div>
                                <button type="submit" class="btn btn-primary">Submit <i class="fa fa-step-forward" aria-hidden="true"></i></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


