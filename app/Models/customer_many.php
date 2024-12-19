<?php

namespace App\Models;
use App\Models\order;
use Illuminate\Database\Eloquent\Model;

class customer_many extends Model
{
    //
    public $timestamps=false;
    protected $table="customer";
    protected $primaryKey="c_id";

    public function order()
    {
        return $this->hasMany(order::class,"c_id","oid");
    }
    public function oldestorder()
    {
        return $this->hasOne(order::class,"c_id","oid")->oldestOfMany('c_id');
    }
    public function latestorder()
    {
        return $this->hasOne(order::class,"c_id","oid")->latestOfMany('c_id');
    }

    public function maxorder()
    {
        return $this->hasOne(order::class,"c_id","oid")->ofMany('amount','max');
    }
    public function minorder()
    {
        return $this->hasOne(order::class,"c_id","oid")->ofMany('amount','min');
    }

}
