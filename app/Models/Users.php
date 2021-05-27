<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "users";

    protected $fillable= [
        'name',
        'username',
        'password',
        'deleted_at',
        'created_at',
        'updated_at'
  ];
}
