<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leave extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "leaves";

    protected $fillable= [
        'leave_type',
        'start_date',
        'end_date',
        'notes',
        'employees_id',
        'deleted_at',
        'created_at',
        'updated_at'
  ];
}
