<?php

namespace App\Models;
use App\Models\category;
use App\Models\postcategory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    public $timestamps=false;
    protected $table="post";
    protected $primaryKey="id";
    public function category_list()
    {
        return $this->belongsToMany (category::class,"post_category");
    }
    public function author()
    {
        return $this->belongsTo(author::class,"user_id","id");
    }
}
