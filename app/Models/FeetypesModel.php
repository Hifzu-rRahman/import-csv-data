<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeetypesModel extends Model
{
    use HasFactory;
    protected $table  = 'feetypes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'feecategory',
        'f_name',
        'Collection_id',
        'br_id',
        'Seq_id',
        'Fee_type_ledger',
        'Fee_headtype',
        ];
}
