<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>برنامج مي لادارة سنتر جيم</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- css -->
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">

</head>

<body>
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6" style="margin-right:20px;">
                <a class="btn btn-primary btn-sm" href="{{ url('/') }}">back</a>
            </div>
            <div class="col-">
                <ol class="">

                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-12" style="padding-right:35px">
            <div class="card" style="background:#000;margin-left: -13px;">
                <div class="card-header pb-0">



                    <br>
                    <br>
                    <p><span style="coloer:red">Abdominal_Circumference</span> </p>
                    <br>
                    <table class="table table-hover" id="example1" data-page-length='50'>
                        <thead>

                            <tr>
                                <th class="wd-15p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">Ocean_Poison</th>
                                <th class="wd-20p border-bottom-0">Client_id</th>
                                <th class="wd-20p border-bottom-0"> Cause_Harm</th>
                                <th class="wd-20p border-bottom-0"> Does_No_Harm</th>
                                <th class="wd-20p border-bottom-0">Notes</th>


                            </tr>
                        </thead>

                        <tbody>

                            <?php $i = 0; ?>
                            @foreach ($Abdominal_Circumference as $Abdominal_Circumferences)
                                <tr>

                                    <td>{{ ++$i }}</td>
                                    <td>{{ $Abdominal_Circumferences->Ocean_Poison }}</td>
                                    <td>{{ $Abdominal_Circumferences->Client->Name }}</td>
                                    <td>{{ $Abdominal_Circumferences->Cause_Harm }}</td>
                                    <td>{{ $Abdominal_Circumferences->Does_No_Harm }}</td>
                                    <td>{{ $Abdominal_Circumferences->Notes }}</td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <br>
                    <br>
                    <p><span style="coloer:red">table_Fat</span> </p>
                    <br>
                    <table class="table table-hover" id="example1" data-page-length='50'>
                        <thead>

                            <tr>

                                <th class="wd-15p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">The_Ratio</th>
                                <th class="wd-20p border-bottom-0">Client_number</th>
                                <th class="wd-20p border-bottom-0"> Fat_Type</th>
                                <th class="wd-20p border-bottom-0"> You_Need_Medical_Advice</th>
                                <th class="wd-20p border-bottom-0"> You_Do_Not_Need_Medical_Advice</th>
                                <th class="wd-20p border-bottom-0">Notes</th>



                            </tr>
                        </thead>

                        <tbody>

                            <?php $i = 0; ?>
                            @foreach ($Fat_Percentage as $Fat_Percentages)
                                <tr>

                                    <td>{{ $i++ }}</td>
                                    <td>{{ $Fat_Percentages->The_Ratio }}</td>
                                    <td>{{ $Fat_Percentages->ClientNumber->Name }}</td>
                                    <td>{{ $Fat_Percentages->Fat_Type }}</td>
                                    <td>{{ $Fat_Percentages->You_Need_Medical_Advice }}</td>
                                    <td>{{ $Fat_Percentages->You_Do_Not_Need_Medical_Advice }}</td>
                                    <td>{{ $Fat_Percentages->Notes }}</td>






                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <br>
                    <br>
                    <p> <span style="coloer:red">table_Height</span> </p>

                    <br>

                    <table class="table table-hover" id="example1" data-page-length='50'>
                        <thead>


                            <tr>

                                <th class="wd-15p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">Height_Cm</th>
                                <th class="wd-20p border-bottom-0">Client__Id</th>
                                <th class="wd-20p border-bottom-0"> Natural</th>
                                <th class="wd-20p border-bottom-0"> Abnormal</th>
                                <th class="wd-20p border-bottom-0">Notes</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($Height as $Heights)
                                <tr>

                                    <td>{{ $i++ }}</td>
                                    <td>{{ $Heights->Height_Cm }}</td>
                                    <td>{{ $Heights->ClientId->Name }}</td>
                                    <td>{{ $Heights->Natural }}</td>
                                    <td>{{ $Heights->Abnormal }}</td>
                                    <td>{{ $Heights->Notes }}</td>






                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <p><span style="coloer:red">table_Weight</span> </p>
                    <br>
                    <table class="table table-hover" id="example1" data-page-length='50'>
                        <thead>



                            <tr>

                                <th class="wd-15p border-bottom-0"> #</th>
                                <th class="wd-15p border-bottom-0"> Weight_kg</th>
                                <th class="wd-20p border-bottom-0">id_Client </th>
                                <th class="wd-20p border-bottom-0"> Plus</th>
                                <th class="wd-20p border-bottom-0"> Minus</th>
                                <th class="wd-20p border-bottom-0">Needs-A-Diet</th>
                                <th class="wd-20p border-bottom-0">Needs_Nourishment</th>
                                <th class="wd-20p border-bottom-0"> Notes</th>



                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 0; ?>
                            @foreach ($Weight as $Weights)
                                <tr>

                                    <td>{{ $i++ }}</td>
                                    <td>{{ $Weights->Weight_kg }}</td>
                                    <td>{{ $Weights->id_Client }}</td>
                                    <td>{{ $Weights->Plus }}</td>
                                    <td>{{ $Weights->Minus }}</td>
                                    <td>{{ $Weights->Needs_A_Diet }}</td>
                                    <td>{{ $Weights->Needs_Nourishment }}</td>
                                    <td>{{ $Weights->Notes }}</td>






                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--/div-->

        <!-- Modal effects -->

    </div>

    <!-- jquery -->
    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- plugins-jquery -->
    <script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
    <!-- plugin_path -->
    <script>
        var plugin_path = 'js/';
    </script>

    <!-- chart -->
    <script src="{{ URL::asset('assets/js/chart-init.js') }}"></script>
    <!-- calendar -->
    <script src="{{ URL::asset('assets/js/calendar.init.js') }}"></script>
    <!-- charts sparkline -->
    <script src="{{ URL::asset('assets/js/sparkline.init.js') }}"></script>
    <!-- charts morris -->
    <script src="{{ URL::asset('assets/js/morris.init.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
    <!-- sweetalert2 -->
    <script src="{{ URL::asset('assets/js/sweetalert2.js') }}"></script>
    <!-- toastr -->
    @yield('js')
    <script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
    <!-- validation -->
    <script src="{{ URL::asset('assets/js/validation.js') }}"></script>
    <!-- lobilist -->
    <script src="{{ URL::asset('assets/js/lobilist.js') }}"></script>
    <!-- custom -->
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
