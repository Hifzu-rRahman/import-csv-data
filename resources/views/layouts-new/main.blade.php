<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--favicon-->
    <link rel="icon" href="{{ url('public/resources/images/favicon.png')  }}" type="image/png" />
    <!--plugins-->
    <link href="{{ url('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css'); }}" rel="stylesheet" />
    <link href="{{ url('public/assets/plugins/simplebar/css/simplebar.css'); }}" rel="stylesheet" />
    <!-- <link href="{{ url('public/assets/plugins/datetimepicker/css/classic.css'); }}" rel="stylesheet" />
	<link href="{{ url('public/assets/plugins/datetimepicker/css/classic.time.css'); }}" rel="stylesheet" />
	<link href="{{ url('public/assets/plugins/datetimepicker/css/classic.date.css'); }}" rel="stylesheet" /> -->
    <!-- <link href="{{ url('public/assets/plugins/select2/css/select2.min.cs'); }}" rel="stylesheet" /> -->
    <link href="{{ url('public/assets/plugins/select2/css/select2-bootstrap4.css'); }}" rel="stylesheet" />

    <link href="{{ url('public/assets/plugins/input-tags/css/tagsinput.css'); }}" rel="stylesheet" />
    <link href="{{ url('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css'); }}" rel="stylesheet" />
    <link href="{{ url('public/assets/plugins/metismenu/css/metisMenu.min.css'); }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ url('public/assets/css/pace.min.css'); }}" rel="stylesheet" />
    <script src="{{ url('public/assets/js/pace.min.js'); }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ url('public/assets/css/bootstrap.min.css'); }}" rel="stylesheet">
    <link href="{{ url('public/assets/css/bootstrap-extended.css'); }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ url('public/assets/css/app.css'); }}" rel="stylesheet">
    <link href="{{ url('public/assets/css/icons.css'); }}" rel="stylesheet">
    <link href="{{ url('public/assets/plugins/datatable/css/dataTables.bootstrap5.min.css'); }}" rel="stylesheet" />

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ url('public/assets/css/dark-theme.css'); }}" />
    <link rel="stylesheet" href="{{ url('public/assets/css/semi-dark.css'); }}" />
    <link rel="stylesheet" href="{{ url('public/assets/css/header-colors.css'); }}" />

    <script src="{{ url('public/assets/js/jquery.min.js'); }}"></script>

    <title>{{ SITE_TITLE }}</title>

    <style>
        .table-striped>tbody>tr:nth-of-type(odd) {
            --bs-table-accent-bg: rgba(240, 90, 100, 0.1);
        }

        .white-box {
            background: #fff;
            padding: 25px;
            margin-bottom: 15px;
        }

        .alert-empty-table-wrapper {
            padding: 0;
            clear: both;
            overflow: hidden;
        }

        .alert-empty-table-icon {
            margin: 30px 0;
            text-align: center;
        }

        .alert-empty-table-icon i {
            font-size: 90px;
            color: #0b2947;
        }

        .alert-empty-bot-info {
            margin-top: 50px;
        }

        .alert-empty-info {
            text-align: center;
            text-transform: uppercase;
            font-size: 22px;
            color: #0b2947;
        }
    </style>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @include('layouts-new.sidebar')
        <!--end sidebar wrapper -->
        <!--start header -->
        @include('layouts-new.header')
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                @if (isset($title) && $title != 'no_breadcrumb')
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <!-- <div class="breadcrumb-title pe-3">Widget</div> -->
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-2">
                                <li class="breadcrumb-item"><a href="{{ (isset($url) && !empty($url)) ? $url : url(); }}">{{ (isset($previous_title) && !empty($previous_title)) ? $previous_title : ""; }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ (isset($title) && !empty($title)) ? $title : ""; }}</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <h6 class="mb-0 text-uppercase">{{ (isset($title) && !empty($title)) ? $title : ""; }}</h6>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->get('error'))
                        <div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="font-35 text-danger"><i class='bx bxs-message-square-x'></i>
                                </div>
                                <div class="ms-3">
                                    <div class="text-danger">{{ session()->get('error') }}</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (session()->get('success'))
                        <div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="font-35 text-success"><i class='bx bxs-check-circle'></i>
                                </div>
                                <div class="ms-3">
                                    <div class="text-success">{{ session()->get('success'); }}</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                </div>
                @endif
                <!--end breadcrumb-->
                <!-- start main page content   -->
                @if(!empty($content))
                @include($content)
                @endif
                <!-- {{ (isset($content) && !empty($content)) ? $content : "" }} -->
                <!-- end main page content -->
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        @include('layouts-new.footer')
    </div>
    <!--end wrapper-->
    <script type="text/javascript">
        $(document).on('click', '.btn_lang', function(e) {

            event.preventDefault();
            var lang = $(this).data('id');
            $.ajax({
                    url: "<?php echo url('admin/set-language'); ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        lang: lang,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                }).done(function(response) {
                  console.log(response);
                    if (response == "success"){
                    window.location.reload();
                }
                else {
                    console.log("error");
                    }
                })
                .fail(function(data) {
                    console.log("error");
                });

        });
    </script>
    <!-- Bootstrap JS -->
    <script src="{{ url('public/assets/js/bootstrap.bundle.min.js'); }}"></script>
    <!--plugins-->
    <!-- <script src="{{ url('public/assets/plugins/input-tags/js/tagsinput.js'); }}"></script> -->
    <!-- <script src="{{ url('public/assets/js/jquery.min.js'); }}"></script> -->
    <script src="{{ url('public/assets/plugins/simplebar/js/simplebar.min.js'); }}"></script>
    <script src="{{ url('public/assets/plugins/metismenu/js/metisMenu.min.js'); }}"></script>

    <script src="{{ url('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js'); }}"></script>
    <script src="{{ url('public/assets/plugins/select2/js/select2.min.js'); }}"></script>
    <!-- <script src="{{ url('public/assets/plugins/datetimepicker/js/legacy.js'); }}"></script>
	<script src="{{ url('public/assets/plugins/datetimepicker/js/picker.js'); }}"></script>
	<script src="{{ url('public/assets/plugins/datetimepicker/js/picker.time.js'); }}"></script>
	<script src="{{ url('public/assets/plugins/datetimepicker/js/picker.date.js'); }}"></script> -->
    <!-- <script src="{{ url('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js'); }}"></script> -->
    <!-- <script src="{{ url('public/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js'); }}"></script> -->
    <script src="{{ url('public/assets/plugins/chartjs/js/Chart.min.js'); }}"></script>
    <script src="{{ url('public/assets/plugins/chartjs/js/Chart.extension.js'); }}"></script>
    <script src="{{ url('public/assets/plugins/apexcharts-bundle/js/apexcharts.min.js'); }}"></script>
    <!-- <script src="{{ url('public/assets/js/index.js'); }}"></script> -->

    <!-- dashboard graph   -->
    <!-- <script src="{{ url('public/assets/plugins/apexcharts-bundle/js/apex-custom.js'); }}"></script> -->
    <!-- dataTable -->
    <script src="{{ url('public/assets/plugins/datatable/js/jquery.dataTables.min.js'); }}"></script>
    <script src="{{ url('public/assets/plugins/datatable/js/dataTables.bootstrap5.min.js'); }}"></script>
    <!--app JS-->
    <script src="{{ url('public/assets/js/app.js'); }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>