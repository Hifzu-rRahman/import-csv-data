<?php

namespace App\Imports;

use App\Models\TransModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class transDataImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // echo json_encode($row);exit;
        return new TransModel([
            // 'sr_no'                      => $row['Sr.'],
            'date'                       => $row['date'],
            'academic_year'              => $row['academic_year'],
            'session'                    => $row['session'],
            'alloted_category'           => $row['alloted_category'],
            'voucher_type'               => $row['voucher_type'],
            'voucher_no'                 => $row['voucher_no'],
            'roll_no'                    => $row['roll_no'],
            'adm_no'                     => $row['admnouniqueid'],
            'status'                     => $row['status'],
            'fee_category'               => $row['fee_category'],
            'faculty'                    => $row['faculty'],
            'program'                    => $row['program'],
            'department'                 => $row['department'],
            'batch'                      => $row['batch'],
            'receipt_no'                 => $row['receipt_no'],
            'fee_head'                   => $row['fee_head'],
            'due_amt'                    => $row['due_amount'],
            'paid_amt'                   => $row['paid_amount'],
            'concession_amt'             => $row['concession_amount'],
            'scholarship_amt'            => $row['scholarship_amount'],
            'reverse_concession_amt'     => $row['reverse_concession_amount'],
            'write_off_amt'              => $row['write_off_amount'],
            'adjusted_amt'               => $row['adjusted_amount'],
            'refund_amt'                 => $row['refund_amount'],
            'fund_transfer_amt'          => $row['fund_trancfer_amount'],
            'remarks'                    => $row['remarks'],
        ]);
    }

    public function headingRow(): int
    {
        return 6;
    }

    public function batchSize(): int
    {
        return 2000;
        
    }

    public function chunkSize(): int
    {
        return 2000;
    }
}
