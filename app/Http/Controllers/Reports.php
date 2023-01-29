<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\TransModel;
use Illuminate\Http\Request;

class Reports extends Controller
{
    function __construct()
    {
        $this->admin    = AdminModel::find(1);

    }

    public function report_1(Request $request)
    {
        $data['records']             = TransModel::orderBy('id')->paginate(10);
        $data['admin']               = $this->admin;
        $data['previous_title']      = __("message.Dashboard");
        $data['url']                 = url('admin/dashboard');
        $data['title']               = __("message.Manage Report 1");
        $data['content']             = 'report.report_1';
        return view('layouts-new.main', $data);
    }
    
    public function report_2(Request $request)
    {
        $data['records']             = TransModel::orderBy('id')->paginate(10);
        // echo json_encode($data['records']);exit;
        $data['admin']               = $this->admin;
        $data['previous_title']      = __("message.Dashboard");
        $data['url']                 = url('admin/dashboard');
        $data['title']               = __("message.Manage Report 2");
        $data['content']             = 'report.report_2';
        return view('layouts-new.main', $data);
    }
}
