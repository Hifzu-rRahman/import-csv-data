<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntrymodeModel extends Model
{
    use HasFactory;
    protected $table  = 'entrymode';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Entry_modename',
        'crdr',
        'entrymodeno',
        ];
}
