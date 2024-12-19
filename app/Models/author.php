<?php
namespace App\Models;
use App\Models\post;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    //
    public $timestamps=false;
    protected $table="author";
    protected $primaryKey="id";
    public function post()
    {
        return $this->hasMany(post::class,'user_id',"id");
    }
}
