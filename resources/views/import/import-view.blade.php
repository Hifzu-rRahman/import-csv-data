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
        <a href="<?= url('admin/add-subcategory') ?>" class="btn btn-sm btn-primary float-right mx-2"><i class="lni lni-plus"></i><?= __('message.Add Field of Study') ?></a>
        <a href="<?= url('admin/subcategory-export') ?>" class="btn btn-sm btn-success float-right"><i class="fa fa-file"></i><?= __('message.Generate CSV') ?></a>
    </div> -->
    <div class="card-body">
        <form action="{{ url('import-csv-data') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="form-control" required>
            <br>
            <div class="col-md-4 text-right" style="float: right;">

                <button class="col-md-12 btn btn-info">Import Data</button>
            </div>
        </form>
         <a href="{{url('get-csv-data')}}" class="btn btn-info"> Fetch Data</a> 
    </div>
</div>

