<br>
@if (session()->flash('updated'))
<div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
    <div class="d-flex align-items-center">
        <div class="font-35 text-success"><i class='bx bxs-message-square-x'></i>
        </div>
        <div class="ms-3">
            <!-- <h6 class="mb-0 text-danger">Danger Alerts</h6> -->
            <div class="text-success">{{ session()->flash('updated') }}</div>
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-8">
    
<div class="col-4">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">{{ __('message.Total Paid Amount') }}</p>
                        <h4 class="my-1"> 
                            {{ !empty($total_paid_amount) ? $total_paid_amount : 0 }}
                             <i class='bx bx-rupee'></i></h4>

                        <!-- <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$24 from last week</p> -->
                    </div>
                    <div class="widgets-icons bg-info text-white ms-auto"><i class='bx bxs-wallet'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">{{ __('message.Total Due Amount') }}</p>
                        <h4 class="my-1"> {{ !empty($total_due_amount) ? $total_due_amount : 0 }}
                            <i class='bx bx-rupee'></i></h4>

                        <!-- <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$24 from last week</p> -->
                    </div>
                    <div class="widgets-icons bg-info text-white ms-auto"><i class='bx bxs-wallet'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">{{ __('message.Total Concession Amount') }}</p>
                        <h4 class="my-1"> {{ !empty($total_concession_amount) ? $total_concession_amount : 0 }}
                            <i class='bx bx-rupee'></i></h4>

                        <!-- <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$24 from last week</p> -->
                    </div>
                    <div class="widgets-icons bg-info text-white ms-auto"><i class='bx bxs-wallet'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">{{ __('message.Total Scholarship Amount') }}</p>
                        <h4 class="my-1"> {{ !empty($total_scholarship_amount) ? $total_scholarship_amount : 0 }}
                            <i class='bx bx-rupee'></i></h4>

                        <!-- <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$24 from last week</p> -->
                    </div>
                    <div class="widgets-icons bg-info text-white ms-auto"><i class='bx bxs-wallet'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">{{ __('message.Total Reverse Concession Amount') }}</p>
                        <h4 class="my-1"> {{ !empty($total_reverse_concession_amount) ? $total_reverse_concession_amount : 0 }}
                            <i class='bx bx-rupee'></i></h4>

                        <!-- <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$24 from last week</p> -->
                    </div>
                    <div class="widgets-icons bg-info text-white ms-auto"><i class='bx bxs-wallet'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">{{ __('message.Total Write Off Amount') }}</p>
                        <h4 class="my-1"> {{ !empty($total_write_off_amount) ? $total_write_off_amount : 0 }}
                            <i class='bx bx-rupee'></i></h4>

                        <!-- <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$24 from last week</p> -->
                    </div>
                    <div class="widgets-icons bg-info text-white ms-auto"><i class='bx bxs-wallet'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">{{ __('message.Total Adjusted Amount') }}</p>
                        <h4 class="my-1"> {{ !empty($total_adjusted_amount) ? $total_adjusted_amount : 0 }}
                            <i class='bx bx-rupee'></i></h4>

                        <!-- <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$24 from last week</p> -->
                    </div>
                    <div class="widgets-icons bg-info text-white ms-auto"><i class='bx bxs-wallet'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">{{ __('message.Total Refund Amount') }}</p>
                        <h4 class="my-1"> {{ !empty($total_refund_amount) ? $total_refund_amount : 0 }}
                            <i class='bx bx-rupee'></i></h4>

                        <!-- <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$24 from last week</p> -->
                    </div>
                    <div class="widgets-icons bg-info text-white ms-auto"><i class='bx bxs-wallet'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">{{ __('message.Total Fund Transfer Amount') }}</p>
                        <h4 class="my-1"> {{ !empty($total_fund_transfer_amount) ? $total_fund_transfer_amount : 0 }}
                            <i class='bx bx-rupee'></i></h4>

                        <!-- <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$24 from last week</p> -->
                    </div>
                    <div class="widgets-icons bg-info text-white ms-auto"><i class='bx bxs-wallet'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    input[type=radio],
    input[type=checkbox] {
        box-sizing: border-box;
        padding: 0;
        position: absolute;
        opacity: 0;
    }

    .btn-group>.btn {
        position: relative;
        flex: 1 1 auto;
        display: inline-block;
        border: 1px solid;
        cursor: pointer;
    }

    .float-right {
        float: right !important;
    }

    .text-black {
        color: black;
    }

    input[type=checkbox] {
        opacity: 1;
    }

    .form-check-input:checked {
        background-color: #F05A64;
        border-color: #F05A64;
    }

    .form-check-input {
        margin-top: 12px;
        background-color: #b6c0c8;
        border-color: #b6c0c8;
    }

    .d-flex {
        display: flex !important;
        justify-content: center;
    }
</style>
<!-- ============================================================== -->

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<!-- <div class="card">
  
    <div class="card-body">
        <h5 style="margin-left:10px;margin-top:20px;">{{ __('message.Recently Registered Users')}}</h5><br>
        @if (!empty($records))
        <div class="table-responsive">
            <table data-order="[]" class="table table-hover">
                <thead>
                    <tr>
                        <td class="text-center">{{ __('message.Full Name') }} </td>
                        <td class="text-center">{{ __('message.Email') }} </td>
                        <td class="text-center">{{ __('message.Mobile Number') }} </td>
                        <td class="text-center">{{ __('message.Status') }} </td>
                        <td class="text-center">{{ __('message.Created Date') }} </td>
                        <td class="text-center">{{ __('message.Action') }} </td>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($records))
                    $i = 1;
                    @foreach ($records as $value)
                    <tr>
                        <td class="text-center">{{ $value['fname'] . " " . $value['lname'] }}</td>
                        <td class="text-center">{{ $value['email'] }}</td>
                        <td class="text-center">{{ $value['phone_code'] . "" . $value['mobile'] }}</td>
                        <td class="text-center">
                            {{ $value['status'] }}
                        </td>
                        <td class="text-center">{{ date('d-m-Y', strtotime($value['created_at'])); }}</td>

                        <td class="text-center">
                            <div class="d-flex">
                                <form action="{{ url('admin/user-details') }}" method="post" class="col-sm-6 mx-2">
                                    @csrf
                                    <input type="hidden" value="{{ $value['id']; }}" id="id" name="id" />
                                    <div class="d-flex"></div><button type="button" class="btn view-user" onclick="this.form.submit()" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Tooltip on left"> <i class="bx bx-show-alt"></i> </button>
                                </form>

                                <div class="form-check form-switch">
                                    <input class="form-check-input text-white change-status" type="checkbox" data-status="{{ ($value['status'] == "active") ? 'active' : 'inactive'; }}" data-id="{{ $value['id'] }}" {{ ($value['status'] == "active") ? 'checked' : ''; }} id="flexSwitchCheckChecked">
                                </div>
                            </div>
        </div>


        </td>

        </tr>
        @endforeach
        @else
        <tr class="text-center">
            <td colspan="9">{{ __('message.No Data Found') }}</td>
        </tr>
        @endif
        </tbody>
        </table>
    </div>
    <div class="float-right">
    </div>
    @else
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="alert-empty-table-wrapper">
                    <div class="alert-empty-table-icon"><i class="bx bx-user"></i></div>
                    <div class="alert-empty-info alert-empty-bot-info">
                        <span>{{ __('message.There is no Users to display') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div> -->
</div>

<link rel="stylesheet" href="{{ url('public/resources/css/sweetalert.min.css'); }}" />
<script src="{{ url('public/resources/js/sweetalert.min.js'); }}"></script>
<script src="{{ url('public/resources/js/moment.min.js'); }}" type="text/javascript"></script>
<script src="{{ url('public/resources/js/daterangepicker.js'); }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#example").DataTable();
        $('input[name="datefilter"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }

        });

        $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    });



    $(document).on('change', '.change-status', function(e) {
        // alert($(this).prop('checked'));
        e.preventDefault();
        let status = $(this).data('status');
        let id = $(this).data('id');
        // let csrf_token = "";

        swal({
                title: "{{ __('message.Are you sure'); }}?",
                text: (status == "active") ? "{{ __('message.You want to inactivate this user'); }}" : "{{ __('message.You want to activate this user'); }}",
                // type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#FFA200',
                cancelButtonColor: '#000',
                confirmButtonText: (status == "active") ? "{{ __('message.Yes inactivate it'); }}!" : "{{ __('message.Yes activate it'); }}!",
                cancelButtonText: "{{ __('message.No cancel it'); }}!",
                closeOnCancel: true,
                html: true,
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                            url: "{{  url('admin/user-status'); }}",
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                status: status,
                                id: id,
                                csrf_test_name: csrf_token
                            },
                        }).done(function(response) {

                            if (response['status'] == 'success') {
                                swal({
                                    title: "{{ __('message.Success'); }}!!",
                                    text: response.message,
                                    // type: "success",
                                    showCancelButton: false,
                                    confirmButtonColor: '#FFA200',
                                    confirmButtonText: "{{ __('message.Okay'); }}",
                                    html: true,
                                }, function(isConfirm) {
                                    if (isConfirm) {
                                        location.reload();
                                    }
                                });
                            } else {
                                swal({
                                    title: "{{ __('message.Error'); }}!!",
                                    text: response.message,
                                    // type: "error",
                                    showCancelButton: false,
                                    confirmButtonColor: '#FFA200',
                                    confirmButtonText: "{{ __('message.Okay'); }}",
                                    html: true,
                                }, function(isConfirm) {
                                    if (isConfirm) {
                                        location.reload();
                                    }
                                });
                            }
                        })
                        .fail(function(data) {
                            console.log("error");

                        });

                } else {
                    location.reload();
                }
            });

    });
</script>

<script>
    $(function() {
        $('#toggle-event').change(function() {
            alert($(this).prop('checked'))
        })
    })
</script>