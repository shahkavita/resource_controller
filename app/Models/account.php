<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $table="account";
    protected $primaryKey="a_id";
    public $timestamps=false;
}