<?php

namespace App\Models;
use App\Models\post;
use App\Models\category;
use Illuminate\Database\Eloquent\Model;

class postcategory extends Model
{
    //
    public $timestamps=false;
    protected $table="post_category";
    protected $primaryKey="id";
}
