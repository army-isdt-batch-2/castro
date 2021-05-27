<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "loans";

    protected $fillable= [
        'loan_type',
        'amount',
        'months_payable',
        'notes',
        'employees_id',
        'deleted_at',
        'created_at',
        'updated_at'
  ];
}
