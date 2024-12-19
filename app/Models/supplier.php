<?php

namespace App\Models;
use App\Models\supplier;
use App\Models\account;
use App\Models\account_history;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    //
    protected $table="supplier";
    protected $primaryKey="s_id";
    public $timestamps=false;
    public function account()
    {
        return $this->hasOne(account::class,"supplier_id","s_id");
    }
    public function history()
    {
        return $this->hasOneThrough(account_history::class,account::class,"supplier_id","account_id","s_id","a_id");
    }
}
