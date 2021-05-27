<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payslip_Record extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "payslip_records";

    protected $fillable= [
        'data',
        'payslips_id',
        'employees_id',
        'deleted_at',
        'created_at',
        'updated_at'
  ];
}
