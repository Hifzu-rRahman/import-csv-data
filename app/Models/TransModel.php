<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransModel extends Model
{
    use HasFactory;

    protected $table  = 'main_trans_table';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'sr_no',
        'date',
        'academic_year',
        'session',
        'alloted_category',
        'voucher_type',
        'voucher_no',
        'roll_no',
        'adm_no',
        'status',
        'fee_category',
        'faculty',
        'program',
        'department',
        'batch',
        'receipt_no',
        'fee_head',
        'due_amt',
        'paid_amt',
        'concession_amt',
        'scholarship_amt',
        'reverse_concession_amt',
        'write_off_amt',
        'adjusted_amt',
        'refund_amt',
        'fund_transfer_amt',
        'remarks',
    ];
}
