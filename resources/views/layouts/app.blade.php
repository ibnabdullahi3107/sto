<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


        {{-- my own chart --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

        <link href="{{ config('app.url') }}/public/assets/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
        <!-- Chartist -->
        <link rel="stylesheet" href="{{ config('app.url') }}/public/assets/plugins/chartist/css/chartist.min.css">
        <link rel="stylesheet" href="{{ config('app.url') }}/public/assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
        <!-- Custom Stylesheet -->
        <link href="{{ config('app.url') }}/public/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="{{config('app.url')}}/public/assets/css/icons/simple-line-icons/css/simple-line-icons.css">

            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
            {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <style>
            #scanner {
                    width: 100%;
                }

                #qr-result {
                    margin-top: 20px;
                    font-size: 24px;
                }
              


        </style>

    <!-- Pignose Calender -->
    {{-- <link href="{{asset('assets/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('assets/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/plugins/toastr/css/toastr.min.css') }}" rel="stylesheet"> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



    </head>
    <body class="font-sans antialiased">
        <div class="">

                <!--**********************************
                    Sidebar end
                ***********************************-->
                @include('layouts.sidebar1')



                <main>
                    {{ $slot }}
                </main>

                <!--**********************************
                    Content body start
                ***********************************-->

                <!--**********************************
                    Content body end
                ***********************************-->


                <!--**********************************
                    Footer start
                ***********************************-->
                {{-- <div class="footer">
                    <div class="copyright">
                        <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
                    </div>
                </div> --}}
                <!--**********************************
                    Footer end
                ***********************************-->
            </div>
            <!--**********************************
                Main wrapper end
            ***********************************-->


            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->

        </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/instascan/1.0.0/instascan.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        <script src="{{ config('app.url') }}/public/assets/plugins/common/common.min.js"></script>
        <script src="{{ config('app.url') }}/public/assets/js/custom.min.js"></script>
        <script src="{{ config('app.url') }}/public/assets/js/settings.js"></script>
        <script src="{{ config('app.url') }}/public/assets/js/gleek.js"></script>
        <script src="{{ config('app.url') }}/public/assets/js/styleSwitcher.js"></script>

        <!-- Chartjs -->
        <script src="{{config('app.url')}}/public/assets/plugins/chart.js/Chart.bundle.min.js"></script>
        <!-- Circle progress -->
        <script src="{{ config('app.url') }}/public/assets/plugins/circle-progress/circle-progress.min.js"></script>
        <!-- Datamap -->
        <script src="{{ config('app.url') }}/public/assets/plugins/d3v3/index.js"></script>
        <script src="{{ config('app.url') }}/public/assets/plugins/topojson/topojson.min.js"></script>
        <script src="{{ config('app.url') }}/public/assets/plugins/datamaps/datamaps.world.min.js"></script>
        <!-- Morrisjs -->
        <script src="{{ config('app.url') }}/public/assets/plugins/raphael/raphael.min.js"></script>
        <script src="{{ config('app.url') }}/public/assets/plugins/morris/morris.min.js"></script>
        <!-- Pignose Calender -->
        <script src="{{ config('app.url') }}/public/assets/plugins/moment/moment.min.js"></script>
        <script src="{{ config('app.url') }}/public/assets/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
        <!-- ChartistJS -->
        <script src="{{ config('app.url') }}/public/assets/plugins/chartist/js/chartist.min.js"></script>
        <script src="{{ config('app.url') }}/public/assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

           <script>
            // Function to show success notification with a dynamic message
            function showSuccessNotification(message) {
                toastr.success(message, 'Success', {
                    positionClass: 'toast-top-right', // You can change the position here
                });
                }

                function showErrorNotification(message) {
                    toastr.error(message, 'Error', {
                        positionClass: 'toast-top-right', // You can change the position here
                    });
                }

                // Check if a success message exists in the session and show the notification
                @if(session('success_message'))
                    showSuccessNotification('{{ session('success_message') }}');
                @endif

                // Check if an error message exists in the session and show the notification
                @if(session('error_message'))
                    showErrorNotification('{{ session('error_message') }}');
                @endif

                // JavaScript code to render the Morris.js bar chart
                function renderMorrisChart() {
                    Morris.Bar({
                        element: 'morris-bar-chart',
                        data: [
                            // Your data here
                        ],
                        xkey: 'y',
                        ykeys: ['a', 'b', 'c'],
                        labels: ['A', 'B', 'C'],
                        barColors: ['#FC6C8E', '#7571f9'],
                        hideHover: 'auto',
                        gridLineColor: 'transparent',
                        resize: true
                    });
                }

                // Call the function to render the chart
                renderMorrisChart();




        </script>

    </body>
</html>
