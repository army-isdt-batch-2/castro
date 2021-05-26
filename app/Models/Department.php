<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "department";

    protected $fillable= [
        'id',
        'department_name',
        'deleted_at',
        'created_at',
        'updated_at'
  ];
}
