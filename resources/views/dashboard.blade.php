<x-app-layout>
    <div class="content-body">


        <div class="container-fluid mt-3">


            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Total Patient</h3>
                            <div class="d-inline-block">
                                <!-- <h2 class="text-white">{{  $total_patient }}</h2> -->

                                <h2 class="text-white" id="totalBeneficiaries">{{  $total_patient }}</h2>

                                {{-- <!-- <p class="text-white mb-0">Dependent: {{ $totalDependents }}</p> -->
                                 <p class="text-white mb-0">Dependent: 0</p> --}}

                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-lg-3 col-sm-7">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Total Beneficiaries</h3>
                            <div class="d-inline-block">
                                @php
                                    $totalBeneficiaries = $clientCount + ($totalDependents);
                                @endphp
                                <!-- <h2 class="text-white">{{ number_format($totalBeneficiaries) }}  </h2>-->
                                    <h2 class="text-white">11,076  </h2>

                                <p class="text-white mb-0">Total Individuals</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-3">
                        <div class="card-body">
                            <h3 class="card-title text-white">Users</h3>
                            {{-- <div class="d-inline-block">
                                <h2 class="text-white">{{ $userCount }}</h2>
                                <p class="text-white mb-0">{{ $dateRange }}</p>
                            </div> --}}
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-4">
                        <div class="card-body">
                            <h3 class="card-title text-white">No of Registered  LGA's</h3>
                            <div class="d-inline-block">
                              {{-- <!--  <h2 class="text-white">{{ $wardCount }}</h2> --> --}}
                              {{-- <h2 class="text-white">{{$lga_count}}</h2>
                                <p class="text-white mb-0">Total Registered  LGA's</p> --}}
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fas fa-building"></i></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body pb-0 d-flex justify-content-between">
                                    <div>
                                        <h4 class="mb-1">Patient Distribution by Age Group</h4>

                                    </div>
                                    <div>
                                        <ul>
                                            <li class="d-inline-block mr-3"><a class="text-dark" href="#">Open with Computer!</a></li>
                                            {{-- <li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a></li>
                                            <li class="d-inline-block"><a class="text-dark" href="#">Month</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-wrapper "  width="100" height="100">
                                    {{-- <canvas id="chart_widget_2"></canvas> --}}

                                        <canvas class="" id="gender_chart" style="height: 100px; width: 100px;"></canvas>

                                </div>
                                <div class="card-body">



                                    @foreach ($ageGroups as $age_group )

                                    <h5 class="d-inline-block mr-3">{{$age_group->age_group}} :  {{$age_group->count}}</h5>



                                    @endforeach






                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body pb-0 d-flex justify-content-between">
                                    <div>
                                        <h4 class="mb-1">Patient Distribution by Age Group</h4>

                                    </div>
                                    <div>
                                        <ul>
                                            <li class="d-inline-block mr-3"><a class="text-dark" href="#">Open with Computer!</a></li>
                                            {{-- <li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a></li>
                                            <li class="d-inline-block"><a class="text-dark" href="#">Month</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-wrapper "  width="100" height="100">
                                    {{-- <canvas id="chart_widget_2"></canvas> --}}

                                        <canvas class="" id="ageChart" style="height: 100px; width: 100px;"></canvas>

                                </div>
                                <div class="card-body">



                                    @foreach ($ageGroups as $age_group )

                                    <h5 class="d-inline-block mr-3">{{$age_group->age_group}} :  {{$age_group->count}}</h5>



                                    @endforeach






                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body pb-0 d-flex justify-content-between">
                                    <div>
                                        <h4 class="mb-1">Patient Status Distribution Overview</h4>

                                    </div>
                                    <div>
                                        <ul>
                                            {{-- <li class="d-inline-block mr-3"><a class="text-dark" href="#"></a></li> --}}
                                            {{-- <li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a></li>
                                            <li class="d-inline-block"><a class="text-dark" href="#">Month</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-wrapper " width="100" height="100">
                                    {{-- <canvas id="chart_widget_2"></canvas> --}}

                                        <canvas class="col-12" id="myPiechart" style="height: 400px; width: 400px;"></canvas>

                                </div>
                                <div class="card-body">
                                        <h5 class="d-inline-block mr-3">Total Patient :{{  $total_patient }}</h5>
                                        <!-- <h2 class="text-white">{{  $total_patient }}</h2> -->


                                        {{-- <!-- <p class="text-white mb-0">Dependent: {{ $totalDependents }}</p> -->
                                         <p class="text-white mb-0">Dependent: 0</p> --}}


                                        <!-- <h2 class="text-white">{{  $total_patient }}</h2> -->

                                            <h5 class="d-inline-block mr-3">Positive Patient :{{  $total_positive_patient }}</h5>
                                            <h5 class="d-inline-block mr-3">Negative Patient :{{  $total_negative_patient }}</h5>
                                            <h5 class="d-inline-block mr-3">Unknown Status :{{  $total_unknown_status }}</h5>

                                        {{-- <!-- <p class="text-white mb-0">Dependent: {{ $totalDependents }}</p> -->
                                         <p class="text-white mb-0">Dependent: 0</p> --}}



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>










        </div>
        <!-- #/ container -->





        <script>
            window.onload = function() {
                var ageGroups = <?php echo json_encode($ageGroups); ?>;


                 var labels = ageGroups.map(function(item) {
                    if (item.age_group === "Child") {
                        return item.age_group + " (0-17 years)";
                    } else if (item.age_group === "Adult") {
                        return item.age_group + " (18-64 years)";
                    } else {
                        return item.age_group + " (greater than 64 years)";
                    }
                  });
                //   var temp_label = labels;
                // labels[0]= temp_label[1];
                // labels[1]=temp_label[2];

                var counts = ageGroups.map(function(item) {

                    return item.count;
                });

                var ctx = document.getElementById('ageChart').getContext('2d');
                var ageChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Number of Patients',
                            data: counts,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                stepSize: 1
                            }
                        }
                    }
                });
            };
        </script>


        <script>
        const labels = ['Unknown Status','Positive Patient', 'Negative Patient'];
        const counts = <?php echo json_encode($total_patient); ?>;

        // Create a pie chart
        var ctx = document.getElementById('myPiechart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Patient Data',
                    data: [<?php echo json_encode($total_unknown_status); ?>, <?php echo json_encode($total_positive_patient); ?>, <?php echo json_encode($total_negative_patient); ?>],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4,
                        borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>


    <script>
        const labels = ['Unknown Status','Positive Patient', 'Negative Patient'];
        const counts = <?php echo json_encode($total_patient); ?>;

        // Create a pie chart
        var ctx = document.getElementById('myPiechart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Patient Data',
                    data: [<?php echo json_encode($total_unknown_status); ?>, <?php echo json_encode($total_positive_patient); ?>, <?php echo json_encode($total_negative_patient); ?>],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4,
                        borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
    </div>

</x-app-layout>
