<?php

namespace App\Models;
use App\Models\product;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class user_product extends Model
{
    //
    public $timestamps=false;
    protected $table="user_product";
    protected $primaryKey="id";
}
