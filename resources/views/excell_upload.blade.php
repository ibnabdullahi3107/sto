<x-app-layout>
    <div class="content-body text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8 p-4">
                <div class="card">
                    <div class="card-header mt-2">
                        <h4 class="card-title">Upload Excel file</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method='POST' action='{{ route('tb.excell.upload') }}' enctype="multipart/form-data">
                                @csrf
                                <div class="row">


                                    <div class="input-group mb-3">
                                        <div class="text-primary col-12">Please make sure your excell file is of the below format</div>

                                        <div class="form-label form-control card-header col-12">Excell File Format</div>

                                       <div style="overflow-x: auto">
                                         <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>patient_id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>age</th>
                    <th>gender</th>
                    <th>diagnosis_date</th>
                    <th>tb_status</th>
                    <th>treatment_start_date</th>
                    <th>retention_status</th>
                    <th>negative_outcome</th>
                    <th>tpt_status</th>
                    <th>viral_load</th>
                    <th>blood_pressure</th>
                    <th>height_cm</th>
                    <th>weight_kg</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kendre</td>
                    <td>Coviello</td>
                    <td>89</td>
                    <td>Bigender</td>
                    <td>9/2/2016</td>
                    <td>positive</td>
                    <td>1/3/2001</td>
                    <td>enrolled</td>
                    <td>none</td>
                    <td>not_stated</td>
                    <td>147</td>
                    <td>172/116</td>
                    <td>190</td>
                    <td>156</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Aigneis</td>
                    <td>Hatherill</td>
                    <td>80</td>
                    <td>Female</td>
                    <td>1/17/2006</td>
                    <td>positive</td>
                    <td>3/8/2000</td>
                    <td>completed</td>
                    <td>failure</td>
                    <td>started</td>
                    <td>75</td>
                    <td>154/100</td>
                    <td>192</td>
                    <td>76</td>
                </tr>
            </tbody>
        </table>
                                    </div>
                                    <div class="mt-4 col-12">
                                        <input type="file" class="form-control" name="file" class="form-control border p-2" >
                                        @error('csv')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror

                                    </div>

                                    </div>



                                </div>
                                <button type="submit" class="btn btn-primary" onclick="showLoadingDialog()">Submit <i class="fa fa-step-forward" aria-hidden="true"></i></button>

                                <script>
                                    // Function to show the loading dialog
                                    function showLoadingDialog() {
                                        Swal.fire({
                                            title: 'Please wait while uploading your data ',
                                            allowOutsideClick: false,
                                            showConfirmButton: false,

                                            willOpen: () => {
                                                Swal.showLoading();
                                            }
                                        });

                                        // Simulate a time-consuming process here
                                        // You can replace this setTimeout with your actual process
                                        setTimeout(function() {
                                            // After the process is complete, close the loading dialog
                                            Swal.close();
                                        }, 3000); // Replace 3000 with the actual duration of your process in milliseconds
                                    }
                                </script>                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


