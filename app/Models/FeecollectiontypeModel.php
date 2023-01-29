<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeecollectiontypeModel extends Model
{
    use HasFactory;

    protected $table  = 'feecollectiontypes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'collectionhead',
        'collectiondesc',
        'br_id',
        ];
}
