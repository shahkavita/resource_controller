<?php

namespace App\Models;
use App\Models\user_product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Customer;
class product extends Model
{
    //
    public $timestamps=false;
    protected $table="product";
    protected $primaryKey="p_id";
    public function customers()
    {
        return $this->belongsToMany(Customer::class,"user_product","p_id","user_id");
        //->using(user_product::class);
    }
}
