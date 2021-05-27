<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payslip extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "payslips";

    protected $fillable= [
        'cutoff_start',
        'cutoff_end',
        'deleted_at',
        'created_at',
        'updated_at'
  ];
}
