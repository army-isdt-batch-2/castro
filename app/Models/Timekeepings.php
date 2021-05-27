<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timekeepings extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "timekeeping";

    protected $fillable= [
        'timekeeping_date',
        'deleted_at',
        'created_at',
        'updated_at'
  ];
}
