<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\TransModel;

class Dashboard extends Controller
{
    function __construct()
    {
        
      
        $this->admin    = AdminModel::find(1);
    }

    public function index()
    {
        $data['total_paid_amount']                 = TransModel::sum('paid_amt');
        $data['total_due_amount']                  = TransModel::sum('due_amt');
        $data['total_concession_amount']           = TransModel::sum('concession_amt');
        $data['total_scholarship_amount']          = TransModel::sum('scholarship_amt');
        $data['total_reverse_concession_amount']   = TransModel::sum('reverse_concession_amt');
        $data['total_write_off_amount']            = TransModel::sum('write_off_amt');
        $data['total_adjusted_amount']             = TransModel::sum('adjusted_amt');
        $data['total_refund_amount']               = TransModel::sum('refund_amt');
        $data['total_fund_transfer_amount']        = TransModel::sum('fund_transfer_amt');
        $data['title']                             = "no_breadcrumb";
        $data['main-title']                        = __("message.Dashboard");
        $data['admin']                             = $this->admin;
        $data['content']                           = 'dashboard-new';
        return view('layouts-new.main', $data);
    }
}
