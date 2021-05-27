<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timekeeping_Records extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "timekeeping_records";

    protected $fillable= [
        'clockin',
        'clockout',
        'total',
        'employees_id',
        'timekeeping_id',
        'deleted_at',
        'created_at',
        'updated_at'
  ];
}
