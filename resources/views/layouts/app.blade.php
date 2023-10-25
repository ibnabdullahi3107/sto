<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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


        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="font-sans antialiased">
        <div class="">
            {{-- @include('layouts.navigation') --}}
            {{-- <div id="preloader">
                <div class="loader">
                    <svg class="circular" viewBox="25 25 50 50">
                        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div> --}}
            <!--*******************
                Preloader end
            ********************-->


            <!--**********************************
                Main wrapper start
            ***********************************-->
            <div id="main-wrapper">

                <!--**********************************
                    Nav header start
                ***********************************-->
                <div class="nav-header">
                    <div class="brand-logo">
                        <a href="index.html">
                            <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                            <span class="logo-compact"><img src="public/assets/images/logo-compact.png" alt=""></span>
                            <span class="brand-title">
                                <img src="images/logo-text.png" alt="">
                            </span>
                        </a>
                    </div>
                </div>
                <!--**********************************
                    Nav header end
                ***********************************-->

                <!--**********************************
                    Header start
                ***********************************-->
                <div class="header">
                    <div class="header-content clearfix">

                        <div class="nav-control">
                            <div class="hamburger">
                                <span class="toggle-icon"><i class="fa fa-bars" aria-hidden="true"></i><span class="nav-text"></span>
                            </div>
                        </div>

                    </div>
                </div>
                <!--**********************************
                    Header end ti-comment-alt
                ***********************************-->

                <!--**********************************
                    Sidebar start
                ***********************************-->
                {{-- <div class="nk-sidebar">
                    <div class="nk-nav-scroll">
                        <ul class="metismenu" id="menu">
                            <li class="nav-label">Dashboard</li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="public/assets/index.html">Home 1</a></li>
                                    <!-- <li><a href="public/assets/index-2.html">Home 2</a></li> -->
                                </ul>
                            </li>
                            <li class="mega-menu mega-menu-sm">
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Layouts</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="public/assets/layout-blank.html">Blank</a></li>
                                    <li><a href="public/assets/layout-one-column.html">One Column</a></li>
                                    <li><a href="public/assets/layout-two-column.html">Two column</a></li>
                                    <li><a href="public/assets/layout-compact-nav.html">Compact Nav</a></li>
                                    <li><a href="public/assets/layout-vertical.html">Vertical</a></li>
                                    <li><a href="public/assets/layout-horizontal.html">Horizontal</a></li>
                                    <li><a href="public/assets/layout-boxed.html">Boxed</a></li>
                                    <li><a href="public/assets/layout-wide.html">Wide</a></li>


                                    <li><a href="public/assets/layout-fixed-header.html">Fixed Header</a></li>
                                    <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="nav-label">Apps</li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="public/assets/email-inbox.html">Inbox</a></li>
                                    <li><a href="public/assets/email-read.html">Read</a></li>
                                    <li><a href="public/assets/email-compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="public/assets/app-profile.html">Profile</a></li>
                                    <li><a href="public/assets/app-calender.html">Calender</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="public/assets/chart-flot.html">Flot</a></li>
                                    <li><a href="public/assets/chart-morris.html">Morris</a></li>
                                    <li><a href="public/assets/chart-chartjs.html">Chartjs</a></li>
                                    <li><a href="public/assets/chart-chartist.html">Chartist</a></li>
                                    <li><a href="public/assets/chart-sparkline.html">Sparkline</a></li>
                                    <li><a href="public/assets/chart-peity.html">Peity</a></li>
                                </ul>
                            </li>
                            <li class="nav-label">UI Components</li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-grid menu-icon"></i><span class="nav-text">UI Components</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="public/assets/ui-accordion.html">Accordion</a></li>
                                    <li><a href="public/assets/ui-alert.html">Alert</a></li>
                                    <li><a href="public/assets/ui-badge.html">Badge</a></li>
                                    <li><a href="public/assets/ui-button.html">Button</a></li>
                                    <li><a href="public/assets/ui-button-group.html">Button Group</a></li>
                                    <li><a href="public/assets/ui-cards.html">Cards</a></li>
                                    <li><a href="public/assets/ui-carousel.html">Carousel</a></li>
                                    <li><a href="public/assets/ui-dropdown.html">Dropdown</a></li>
                                    <li><a href="public/assets/ui-list-group.html">List Group</a></li>
                                    <li><a href="public/assets/ui-media-object.html">Media Object</a></li>
                                    <li><a href="public/assets/ui-modal.html">Modal</a></li>
                                    <li><a href="public/assets/ui-pagination.html">Pagination</a></li>
                                    <li><a href="public/assets/ui-popover.html">Popover</a></li>
                                    <li><a href="public/assets/ui-progressbar.html">Progressbar</a></li>
                                    <li><a href="public/assets/ui-tab.html">Tab</a></li>
                                    <li><a href="public/assets/ui-typography.html">Typography</a></li>
                                <!-- </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                                </a>
                                <ul aria-expanded="false"> -->
                                    <li><a href="public/assets/uc-nestedable.html">Nestedable</a></li>
                                    <li><a href="public/assets/uc-noui-slider.html">Noui Slider</a></li>
                                    <li><a href="public/assets/uc-sweetalert.html">Sweet Alert</a></li>
                                    <li><a href="public/assets/uc-toastr.html">Toastr</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="widgets.html" aria-expanded="false">
                                    <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                                </a>
                            </li>
                            <li class="nav-label">Forms</li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="public/assets/form-basic.html">Basic Form</a></li>
                                    <li><a href="public/assets/form-validation.html">Form Validation</a></li>
                                    <li><a href="public/assets/form-step.html">Step Form</a></li>
                                    <li><a href="public/assets/form-editor.html">Editor</a></li>
                                    <li><a href="public/assets/form-picker.html">Picker</a></li>
                                </ul>
                            </li>
                            <li class="nav-label">Table</li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="public/assets/table-basic.html" aria-expanded="false">Basic Table</a></li>
                                    <li><a href="public/assets/table-datatable.html" aria-expanded="false">Data Table</a></li>
                                </ul>
                            </li>
                            <li class="nav-label">Pages</li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="public/assets/page-login.html">Login</a></li>
                                    <li><a href="public/assets/page-register.html">Register</a></li>
                                    <li><a href="public/assets/page-lock.html">Lock Screen</a></li>
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                        <ul aria-expanded="false">
                                            <li><a href="public/assets/page-error-404.html">Error 404</a></li>
                                            <li><a href="public/assets/page-error-403.html">Error 403</a></li>
                                            <li><a href="public/assets/page-error-400.html">Error 400</a></li>
                                            <li><a href="public/assets/page-error-500.html">Error 500</a></li>
                                            <li><a href="public/assets/page-error-503.html">Error 503</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div> --}}
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
             function showSuccessNotification(message) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: message,
            position: 'center', // You can change the position here
            showConfirmButton: false,
            timer: null// Set the duration for the notification to remain visible
        });
    }

    function showErrorNotification(message) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: message,
            position: 'center', // You can change the position here
            showConfirmButton: false,
            timer: null // Set the duration for the notification to remain visible
        });
    }

    // Check if a success message exists in the session and show the notification
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success_message'))
            showSuccessNotification('{{ session('success_message') }}');
        @endif

        // Check if an error message exists in the session and show the notification
        @if(session('error_message'))
            showErrorNotification('{{ session('error_message') }}');
        @endif
    });
            // Function to show success notification with a dynamic message
            // function showSuccessNotification(message) {
            //     toastr.success(message, 'Success', {
            //         positionClass: 'toast-top-right', // You can change the position here
            //     });
            //     }

            //     function showErrorNotification(message) {
            //         toastr.error(message, 'Error', {
            //             positionClass: 'toast-top-right', // You can change the position here
            //         });
            //     }

            //     // Check if a success message exists in the session and show the notification
            //     @if(session('success_message'))
            //         showSuccessNotification('{{ session('success_message') }}');
            //     @endif

            //     // Check if an error message exists in the session and show the notification
            //     @if(session('error_message'))
            //         showErrorNotification('{{ session('error_message') }}');
            //     @endif

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
