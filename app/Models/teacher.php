<?php

namespace App\Models;
use App\Models\subject;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    //
    protected $table="teacher";
    protected $primaryKey="t_id";
    public $timestamps=false;
    public function oldest()
    {
        return $this->hasOne(subject::class,"t_id","s_id");
    }
}
