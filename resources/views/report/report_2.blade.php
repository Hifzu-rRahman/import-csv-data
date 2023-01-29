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
<div class="card">
    <!-- <div class="card-header">
        <a href="<?= url('admin/add-category') ?>" class="btn btn-sm btn-primary float-right"><i class="lni lni-plus"></i> <?= __('message.Add Subject') ?></a>
    </div> -->
    <div class="card-body">
        <?php if (!empty($records)) : ?>
            <div class="table-responsive">
                <table id="example" class="table table-hover">
                    <thead>
                        <tr>
                            <td class="text-center"><?= __('message.Admno') ?> </td>
                            <td class="text-center"><?= __('message.Roll no') ?> </td>
                            <td class="text-center"><?= __('message.Amount') ?> </td>
                            <td class="text-center"><?= __('message.Receipt no') ?> </td>
                            <td class="text-center"><?= __('message.Receipt Date') ?> </td>
                            <td class="text-center"><?= __('message.Academic Year') ?> </td>
                            <td class="text-center"><?= __('message.Tuition Fee') ?> </td>
                            <td class="text-center"><?= __('message.Exam Fee') ?> </td>
                            <td class="text-center"><?= __('message.Library Fee') ?> </td>
                            <td class="text-center"><?= __('message.Sports Fee') ?> </td>
                            <td class="text-center"><?= __('message.Degree Fee') ?> </td>
                            <td class="text-center"><?= __('message.Other Fee') ?> </td>
                            <td class="text-center"><?= __('message.Misc Fee') ?> </td>
                            <td class="text-center"><?= __('message.Convection Fee') ?> </td>
                            <td class="text-center"><?= __('message.Fine Fee') ?> </td>
                            <td class="text-center"><?= __('message.Voucher Type') ?> </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($records)) {
                            foreach ($records as $value) { ?>
                                <tr>
                                    <td class="text-center"><?= $value['adm_no'] ?></td>
                                    <td class="text-center"><?= $value['roll_no'] ?></td>
                                    <td class="text-center"><?= $value['paid_amt'] ?></td>
                                    <td class="text-center"><?= $value['receipt_no'] ?></td>
                                    <td class="text-center"><?= $value['date'] ?></td>
                                    <td class="text-center"><?= $value['academic_year'] ?></td>
                                    <td class="text-center"><?= (($value['fee_head'] == "TUITION FEE") || ($value['fee_head'] == "Tuition Fee (Back Paper)") || ($value['fee_head'] == "Tuition Fee (IBM ClaCCeC)") || ($value['fee_head'] == "Tuition Fee (IBM Classes)") || ($value['fee_head'] =="Tuition Fee Debarred") || ($value['fee_head'] == "Tuition Fees") || ($value['fee_head'] == "Tution Fees debarred paper"))?$value['paid_amt'] :0 ?></td>
                                    <td class="text-center"><?= (($value['fee_head'] == "Exam Fee") || ($value['fee_head'] == "Exam Fee (CemeCter)") || ($value['fee_head'] == "Exam Fee (Back Paper)") || ($value['fee_head'] == "Exam Fee (Letral Deploma)") || ($value['fee_head'] == "Exam Fee (Semester)") || ($value['fee_head'] == "Exam Fee Debarred") || ($value['fee_head'] == "Exam Fee ET Eligibilty") || ($value['fee_head'] == "Exam Fees Back Paper") || ($value['fee_head'] == "Exam Fees Debarred Paper"))?$value['paid_amt'] :0 ?></td>
                                    <td class="text-center"><?= (($value['fee_head'] == "Library Fine Fee") || ($value['fee_head'] =="Library BookC Recieved") || ($value['fee_head'] =="Library BookC Received") || ($value['fee_head'] =="Library Books Recieved"))?$value['paid_amt'] :0 ?></td>
                                    <td class="text-center"><?= ($value['fee_head'] == "Sport Activity Received")?$value['paid_amt'] :0 ?></td>
                                    <td class="text-center"><?= (($value['fee_head'] == "Degree Fees") || ($value['fee_head'] =="Degree Fee"))?$value['paid_amt'] :0 ?></td>
                                    <td class="text-center"><?= (($value['fee_head'] == "OTHER FEES") || ($value['fee_head'] == "Other Fee") || ($value['fee_head'] == "Ajustable_Excess_Amount") || ($value['fee_head'] == "Adjusted_Amount") || ($value['fee_head'] == "Adjustable Excess Fee") || ($value['fee_head'] == "Excess Amount") || ($value['fee_head'] == "Hostel & Mess Fee") || ($value['fee_head'] == "Rechecking Fee") || ($value['fee_head'] == "Reckecking/Scrutiny Fee") || ($value['fee_head'] == "Registration Fee") || ($value['fee_head'] == "Revaluation Fee") || ($value['fee_head'] == "Security Fee") || ($value['fee_head'] == "Special Backlog fee") || ($value['fee_head'] == "Student ID Fee") || ($value['fee_head'] == "Student ID Fee MISC") || ($value['fee_head'] == "Thesis Fees") || ($value['fee_head'] == "Training & Certification Fee"))?$value['paid_amt'] :0 ?></td>
                                    <td class="text-center"><?= ($value['fee_head'] == "Misc Exam Fees Back Paper")?$value['paid_amt'] :0 ?></td>
                                    <td class="text-center"><?= (($value['fee_head'] == "Degree/Convocation/Certificate fee") || ($value['fee_head'] =="Convocation Fee Head"))?$value['paid_amt'] :0 ?></td>
                                    <td class="text-center"><?= (($value['fee_head'] == "Fine Fee") || ($value['fee_head'] =="Library Fine Fee") || ($value['fee_head'] =="Online Registration Fine odd Sem") || ($value['fee_head'] =="Indisciplinary Fine") || ($value['fee_head'] =="Online Registration Fine even Sem") || "Registration FIne Even Sem" || "Registration FIne Odd Sem")?$value['paid_amt'] :0 ?></td>
                                    <td class="text-center"><?= $value['voucher_type'] ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr class="text-center">
                                <td colspan="9"><?= __('message.No Data Found') ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div >
                {{ $records->links('vendor.pagination.bootstrap-5') }}  
                
            </div>
        <?php else : ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="alert-empty-table-wrapper">
                            <div class="alert-empty-table-icon"><i class="bx bx-layer"></i></div>
                            <div class="alert-empty-info alert-empty-bot-info">
                                <span><?= __('message.There is no Reports to Display') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<link rel="stylesheet" href="<?= url('public/resources/css/sweetalert.min.css'); ?>" />
<script src="<?= url('public/resources/js/sweetalert.min.js'); ?>"></script>
<script src="<?= url('public/resources/js/moment.min.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('change', '.change-status', function(e) {
        // alert($(this).prop('checked'));
        e.preventDefault();
        let status = $(this).data('status');
        let id = $(this).data('id');
        let csrf_token = "";

        swal({
                title: "<?= __('message.Are you sure'); ?>?",
                text: (status == "active") ? "<?= __('message.You want to Inactivate this Subject'); ?>" : "<?= __('message.You want to Activate this Subject'); ?>",
                // type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#FFA200',
                cancelButtonColor: '#000',
                confirmButtonText: (status == "active") ? "<?= __('message.Yes inactivate it'); ?>!" : "<?= __('message.Yes activate it'); ?>!",
                cancelButtonText: '<?= __('message.No cancel it'); ?>!',
                closeOnCancel: true,
                html: true,
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                            url: "<?php echo url('admin/category-status'); ?>",
                            type: 'POST',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                status: status,
                                id: id,
                                // csrf_test_name: csrf_token
                            },
                        }).done(function(response) {

                            if (response['status'] == 'success') {
                                swal({
                                    title: "<?= __('message.Success'); ?>!!",
                                    text: response.message,
                                    // type: "success",
                                    showCancelButton: false,
                                    confirmButtonColor: '#FFA200',
                                    confirmButtonText: "<?= __('message.Okay'); ?>",
                                    html: true,
                                }, function(isConfirm) {
                                    if (isConfirm) {
                                        window.location.reload();
                                    }
                                });
                            } else {
                                swal({
                                    title: "<?= __('message.Error'); ?>!!",
                                    text: response.message,
                                    // type: "error",
                                    showCancelButton: false,
                                    confirmButtonColor: '#FFA200',
                                    confirmButtonText: "<?= __('message.Okay'); ?>",
                                    html: true,
                                }, function(isConfirm) {
                                    if (isConfirm) {
                                        window.location.reload();
                                    }
                                });
                            }
                        })
                        .fail(function(data) {
                            console.log("error");
                        });

                } else {
                    window.location.reload();
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

<!-- Confirm Delete -->
<script>
    $(document).on('click', '#delete', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let csrf_token = "";
        swal({
                title: "<?= __('message.Are you sure'); ?>?",
                text: "<?= __('message.You want to Delete this Subject'); ?>",
                showCancelButton: true,
                confirmButtonColor: '#FFA200',
                cancelButtonColor: '#000',
                confirmButtonText: "<?= __('message.Yes Delete it'); ?>!",
                cancelButtonText: '<?= __('message.No cancel it'); ?>!',
                closeOnCancel: true,
                html: true,
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                            url: "<?php echo url('admin/deleteCategory'); ?>",
                            type: 'POST',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                id: id,
                                csrf_test_name: csrf_token
                            },
                        }).done(function(response) {
                            swal({
                                title: "<?= __('message.Deleted'); ?>!",
                                text: response.message,
                                // type: "success",
                                showCancelButton: false,
                                confirmButtonColor: '#FFA200',
                                confirmButtonText: "<?= __('message.Okay'); ?>",
                                html: true,
                            }, function(isConfirm) {
                                if (isConfirm) {
                                    window.location.reload();
                                }
                            });
                        })
                        .fail(function(data) {
                            console.log("error");

                        });
                }
            });
    });
</script>

<script>
    $(document).ready(function() {
        // $('#example').DataTable();
    });
</script>