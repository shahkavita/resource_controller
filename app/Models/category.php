<?php

namespace App\Models;
use App\Models\post;
use App\Models\postcategory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    public $timestamps=false;
    protected $table="category";
    protected $primaryKey="c_id";
    public function post_list()
    {
        return $this->belongsToMany(post::class,"post_category");
    }
}
