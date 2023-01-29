<?php

namespace App\Http\Controllers;

use App\Imports\transDataImport;
use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\BranchModel;
use App\Models\EntrymodeModel;
use App\Models\FeecategoryModel;
use App\Models\FeecollectiontypeModel;
use App\Models\FeetypesModel;
use App\Models\ModuleModel;
use App\Models\TempTable;
use App\Models\TransModel;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use Maatwebsite\Excel\Facades\Excel;

class ImportData extends Controller
{

    function __construct()
    {

        // $this->admin_id = session()->get('login_id');
        // $this->admin_id = (int) $this->admin_id;
        // $where          = ['id' => $this->admin_id];
        $this->admin    = AdminModel::find(1);
    }

    public function index()
    {
        // $data['records']             = AdminModel::with('category')->whereNot('status' ,'deleted')->get();
        // echo json_encode($data['records'][0]['category']);exit;
        $data['admin']               = $this->admin;
        $data['previous_title']      = __("message.Dashboard");
        $data['url']                 = url('admin/dashboard');
        $data['title']               = __("message.Manage Import Data");
        $data['content']             = 'import.import-view';
        return view('layouts-new.main', $data);
    }

    public function importCsv(Request $request)
    {
        // $validatedData = $request->validate([

        //     'file' => 'required',

        //  ]);
        //  $temps = array();
        //  $err_header = array();
        // $file  = $request->file('file');
        // $file_tmp = $file->getClientOriginalName();
        //  $file  = $_FILES['file'];
        //  if (!empty($file['tmp_name'])){
        //      $file_tmp = $file['tmp_name'];
        //      $handle = fopen($file_tmp, "r");
        //      $loop = '5';
        //      while (($fp = fgetcsv($handle, 1000,",")) !== false){
        //         $loop++;


        //         if ($loop === '6') {
        //             // echo print_r((($fp)));exit;

        //             if ((TRIM($fp[0])) != 'Sr.') {
        //                 array_push($err_header, $fp[0]);
        //             }
        //             if ((TRIM($fp[1])) != 'Date') {
        //                 array_push($err_header, $fp[1]);
        //             }
        //             if ((TRIM($fp[2])) != 'Academic Year') {
        //                 array_push($err_header, $fp[2]);
        //             }
        //             if ((TRIM($fp[3])) != 'Session') {
        //                 array_push($err_header, $fp[3]);
        //             }
        //             if ((TRIM($fp[4])) != 'Alloted Category') {
        //                 array_push($err_header, $fp[4]);
        //             }
        //             if ((TRIM($fp[5])) != 'Voucher Type') {
        //                 array_push($err_header, $fp[5]);
        //             }
        //             if ((TRIM($fp[6])) != 'Voucher No.') {
        //                 array_push($err_header, $fp[6]);
        //             }
        //             if ((TRIM($fp[7])) != 'Roll No.') {
        //                 array_push($err_header, $fp[7]);
        //             }
        //             if ((TRIM($fp[8])) != 'Admno/UniqueId') {
        //                 array_push($err_header, $fp[8]);
        //             }
        //             if ((TRIM($fp[9])) != 'Status') {
        //                 array_push($err_header, $fp[9]);
        //             }
        //             if ((TRIM($fp[10])) != 'Fee Category') {
        //                 array_push($err_header, $fp[10]);
        //             }
        //             if ((TRIM($fp[11])) != 'Faculty') {
        //                 array_push($err_header, $fp[11]);
        //             }
        //             if ((TRIM($fp[12])) != 'Program') {
        //                 array_push($err_header, $fp[12]);
        //             }
        //             if ((TRIM($fp[13])) != 'Department') {
        //                 array_push($err_header, $fp[13]);
        //             }
        //             if ((TRIM($fp[14])) != 'Batch') {
        //                 array_push($err_header, $fp[14]);
        //             }
        //             if ((TRIM($fp[15])) != 'Receipt No.') {
        //                 array_push($err_header, $fp[15]);
        //             }
        //             if ((TRIM($fp[16])) != 'Fee Head') {
        //                 array_push($err_header, $fp[16]);
        //             }
        //             if ((TRIM($fp[17])) != 'Due Amount') {
        //                 array_push($err_header, $fp[17]);
        //             }
        //             if ((TRIM($fp[18])) != 'Paid Amount') {
        //                 array_push($err_header, $fp[18]);
        //             }
        //             if ((TRIM($fp[19])) != 'Concession Amount') {
        //                 array_push($err_header, $fp[19]);
        //             }
        //             if ((TRIM($fp[20])) != 'Scholarship Amount') {
        //                 array_push($err_header, $fp[20]);
        //             }
        //             if ((TRIM($fp[21])) != 'Reverse Concession Amount') {
        //                 array_push($err_header, $fp[21]);
        //             }
        //             if ((TRIM($fp[22])) != 'Write Off Amount') {
        //                 array_push($err_header, $fp[22]);
        //             }
        //             if ((TRIM($fp[23])) != 'Adjusted Amount') {
        //                 array_push($err_header, $fp[23]);
        //             }
        //             if ((TRIM($fp[24])) != 'Refund Amount') {
        //                 array_push($err_header, $fp[24]);
        //             }
        //             if ((TRIM($fp[25])) != 'Fund TranCfer Amount') {
        //                 array_push($err_header, $fp[25]);
        //             }
        //             if ((TRIM($fp[26])) != 'Remarks') {
        //                 array_push($err_header, $fp[26]);
        //             }

        //             if (!empty($err_header)) {
        //                 $response['message'] = implode(', ', $err_header) . ' ' . ("file column mismatched");
        //                 break;
        //             }
        //         } else {

        //             // if (!$fp[0] || strpos($fp[0], '+') || !$fp[2] || !$fp[3] || !$fp[4] || !$fp[5] || !$fp[6] || !$fp[7]|| !$fp[8] || !$fp[9] || !$fp[10] || !$fp[11] || !$fp[12] || !$fp[13]|| !$fp[14] || !$fp[15] || !$fp[16] || !$fp[17] || !$fp[18] || !$fp[19]|| !$fp[20] || !$fp[21] || !$fp[22] || !$fp[23] || !$fp[24] || !$fp[25]|| !$fp[26]) {
        //                 //     $response['has_error'] = true;
        //                 //     $response['message'] = ('File has empty cell. Please check and upload valid file');
        //                 //     break;
        //                 // }
        //                 // echo json_encode($fp);exit;
        //                 $temp = [
        //                     'sr'                         => utf8_encode($fp[0]),
        //                     'date'                       => utf8_encode($fp[1]),
        //                     'academic_year'              => utf8_encode($fp[2]),
        //                     'session'                    => utf8_encode($fp[3]),
        //                 'alloted_category'           => utf8_encode($fp[4]),
        //                 'voucher_type'               => utf8_encode($fp[5]),
        //                 'voucher_no'                 => utf8_encode($fp[6]),
        //                 'roll_no'                    => utf8_encode($fp[7]),
        //                 'adm_no'                     => utf8_encode($fp[8]),
        //                 'status'                     => utf8_encode($fp[9]),
        //                 'fee_category'               => utf8_encode($fp[10]),
        //                 'faculty'                    => utf8_encode($fp[11]),
        //                 'program'                    => utf8_encode($fp[12]),
        //                 'department'                 => utf8_encode($fp[13]),
        //                 'batch'                      => utf8_encode($fp[14]),
        //                 'receipt_no'                 => utf8_encode($fp[15]),
        //                 'fee_head'                   => utf8_encode($fp[16]),
        //                 'due_amt'                    => utf8_encode($fp[17]),
        //                 'paid_amt'                   => utf8_encode($fp[18]),
        //                 'concession_amt'             => utf8_encode($fp[19]),
        //                 'scholarship_amt'            => utf8_encode($fp[20]),
        //                 'reverse_concession_amt'     => utf8_encode($fp[21]),
        //                 'write_off_amt'              => utf8_encode($fp[22]),
        //                 'adjusted_amt'               => utf8_encode($fp[23]),
        //                 'refund_amt'                 => utf8_encode($fp[24]),
        //                 'fund_transfer_amt'          => utf8_encode($fp[25]),
        //                 'remarks'                    => utf8_encode($fp[26]),
        //                 ];
        //             $temps[] = $temp;

        //         }

        //     }
        //     $response['records'] = $temps;
        //     echo json_encode($response);exit;
        //  }
        // $file_tmp = $file['tmp_name'];
        // $handle = fopen($file_tmp, "r");
        // echo json_encode($handle);exit; 
        // $handle = fopen($file_tmp, "r");
        Excel::import(new transDataImport, $request->file('file'));


        return ('The file has been excel/csv imported to database in laravel');
    }

    public function importCsv2(Request $request)
    {
        // try{
        $validator = Validator::make(
            $request->all(),
            [
                'file' => ['required', File::types(['csv', 'xls'])],
            ]
        );
        if ($validator->fails()) {
            return response([
                'status'   => "failed",
                'message'  => __('message.validation.failure'),
                'errors'   => $validator->errors(),
            ], 422);
        }

        $file  = $request->file('file');
        if (!$request->hasFile('file') && !$request->isValid('file')) {
            session()->flash('failure', __('message.Please Select valid File'));
            return redirect()->to(url('manage-import-data'));
        } else {
            $name  = $file->getClientOriginalName();

            $file_path =  'public/uploads/student-file/';
            if (!file_exists($file_path)) {
                mkdir($file_path, 6777, true);
            }
            $file->move($file_path, $name);
            $file_url  =  $file_path . $name;
            $host      =   $_SERVER['DOCUMENT_ROOT'] . '/study/export-assign-data/';

            $_file  = $host . $file_url;

            //   $query = "LOAD DATA INFILE '$_file' INTO TABLE main_trans_table FIELDS TERMINATED BY '\t' ESCAPED BY '' LINES TERMINATED BY '\n' IGNORE 6 ROWS";
            $query = "LOAD DATA INFILE 'C:\/xampp\/htdocs\/study\/export-assign-data\/public\/uploads\/student-file\/Bulk_Ledger_04_03_2021_17_13_28.csv' 
                  INTO TABLE main_trans_table
                  FIELDS TERMINATED BY ','
                  ESCAPED BY ''
                  LINES TERMINATED BY '\n'
                  IGNORE 6 ROWS";

            //   $query = "select * from admins";
            // $result = DB::insert("LOAD DATA INFILE 'C:/xampp/htdocs/study/export-assign-data/public/uploads/student-file/Book1.csv'
            // INTO TABLE main_trans_table
            // FIELDS TERMINATED BY '\t'
            // ENCLOSED BY '\"'
            // LINES TERMINATED BY '\n'
            // IGNORE 1 ROWS");
            //   $result = DB::insert($query);
            $result = DB::statement($query);
            echo json_encode($result);
            exit;
        }

        // }catch(Exception $e){
        //     return response([
        //         'status'   => "failed",
        //         'message'  => __('message.Failed to upload the file'),
        //         'errors'   => (object) ['error' => $e->getMessage()]
        //     ], 400);
        // }
    }

    public function getCsvData(Request $request)
    {
        //  $data  = TransModel::select('faculty')->distinct()->get();
        //  foreach($data as $data){

        //      $branch = new BranchModel();
        //      $branch->br_name = $data->faculty;

        //     $branch->save();
        //  }

        // for($i=1;$i<=24;$i++ ){
        //      $data  = TransModel::select('fee_category')->distinct()->get();
        //  foreach($data as $data){
        //     if(!empty($data->fee_category)){
        //         $feecategory  = new FeecategoryModel();

        //             $feecategory->fee_category = $data->fee_category;
        //             $feecategory->br_id = $i;
        //             $feecategory->save();
        //         }
        //     }
        //  }

        // for($i=1;$i<=24;$i++){
        //     $data = [["name"=>"Academic","desc"=>"Academic"],["name"=>"Academic Misc","desc"=>"Academic Misc"],
        //     ["name"=>"Hostel","desc"=>"Hostel"],["name"=>"Hostel Misc","desc"=>"Hostel Misc"],
        //     ["name"=>"Transport","desc"=>"Transport"],["name"=>"Transport Misc","desc"=>"Transport Misc"],];

        //     foreach($data as $data){
        //         $feecollectiontype = new FeecollectiontypeModel();
        //         $feecollectiontype->collectionhead    = $data['name']; 
        //         $feecollectiontype->collectiondesc    = $data['desc']; 
        //         $feecollectiontype->br_id    = $i;
        //         $feecollectiontype->save(); 
        //     }
        // }

        //  // module 
        //  $data = [["name"=>"Academic","module_id"=>"1"],["name"=>"Academic Misc","module_id"=>"11"],
        //      ["name"=>"Hostel","module_id"=>"2"],["name"=>"Hostel Misc","module_id"=>"22"],
        //      ["name"=>"Transport","module_id"=>"3"],["name"=>"Transport Misc","module_id"=>"33"]]; 

        //      foreach($data as $data){

        //          $module = new ModuleModel();
        //          $module->module = $data['name'];  
        //          $module->module_id = $data['module_id'];  
        //          $module->save();  
        //         }


        // entrymode
        // $data = [["name"=>"due","crdr"=>"D","entrymode"=>"0"],["name"=>"revdue","crdr"=>"C","entrymode"=>"12"],
        //          ["name"=>"scholarship","crdr"=>"C","entrymode"=>"15"],["name"=>"scholarshiprev/revconsession","crdr"=>"D","entrymode"=>"16"],
        //          ["name"=>"consession","crdr"=>"C","entrymode"=>"15"],["name"=>"rcpt","crdr"=>"C","entrymode"=>"0"],
        //          ["name"=>"revrcpt","crdr"=>"D","entrymode"=>"0"],["name"=>"jv","crdr"=>"C","entrymode"=>"14"],
        //          ["name"=>"revjv","crdr"=>"D","entrymode"=>"14"],["name"=>"pmt","crdr"=>"D","entrymode"=>"1"],
        //          ["name"=>"revpmt","crdr"=>"C","entrymode"=>"1"],["name"=>"fundtransfer","crdr"=>"positive and negative","entrymode"=>"1"],];
        // foreach($data as $data){

        //     $entrymode  = new EntrymodeModel();
        //     $entrymode->Entry_modename = $data['name'];
        //     $entrymode->crdr = $data['crdr'];
        //     $entrymode->entrymodeno = $data['entrymode'];
        //     $entrymode->save();
        // }


        // $fee_category   = FeecategoryModel::get();
        // $fee_collection = FeecollectiontypeModel::get();
        // $fee_colcate    = DB::table('feecategory')
        // ->join('feecollectiontypes', 'feecategory.br_id', '=', 'feecollectiontypes.br_id')
        // ->select('feecategory.*', 'feecollectiontypes.id as feecollection_id', 'feecollectiontypes.collectionhead')
        // ->get();
        // foreach ($fee_colcate as $fee_cate) {
        //     $data           = TransModel::select('fee_head')->distinct()->get();
        //     $i=1;
        //     foreach($data as $data){
        //         $where  = ['module'=> $fee_cate->collectionhead];
        //         $module  = ModuleModel::where($where)->first();
        //         $fee_type  = new FeetypesModel();
        //         $fee_type->feecategory  =  $fee_cate->id;
        //         $fee_type->f_name  =  $data->fee_head;
        //        $fee_type->Collection_id  =  $fee_cate->feecollection_id;
        //        $fee_type->br_id  =  $fee_cate->br_id;
        //        $fee_type->Seq_id  =  $i++;
        //        $fee_type->Fee_type_ledger  =  $data->fee_head;
        //        $fee_type->Fee_headtype  =  $module->module_id;
        //        $fee_type->save();
        //     }
        // }
        
        $data           = TransModel::select('fee_head')->distinct()->get();
        
        echo json_encode(($data));
        exit;
        for ($i = 1; $i <= 24; $i++) {
        }
    }
}
