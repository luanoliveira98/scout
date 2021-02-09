<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'nivel', 'created_at', 'updated_at', 'delete_at'];

    protected $table = 'equipes';
}