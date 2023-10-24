<x-app-layout>


    <div class="content-body text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6 p-4">
                <div class="card">
                    <div class="card-header mt-2">
                        <h4 class="card-title">Add Categories</h4>
                        <a href="{{ route('all_categories') }}" class="btn btn-success float-right">View</a>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">


                       @foreach ($clients as $client)
                            <div class="client-qrcode mt-4">
                                <?php
                                $qrcode = SimpleSoftwareIO\QrCode\Facades\QrCode::size(200)->generate($client->custom_id);
                                $label = $client->name;
                                ?>

                               <div>
                                {{$qrcode }}
                                </div>
                                <p>{{ $label }}</p>
                            </div>
                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


