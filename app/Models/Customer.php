<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\user_product;
class Customer extends Model
{
    //
    public $timestamps=false;
    public $guarded=[];
    protected $table='tbl_customer';
    protected $primaryKey='c_id';
    public function product()
    {
        return $this->belongsToMany(product::class,"user_product","user_id","p_id");
       // ->using(user_product::class);
    }
}
