<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    protected $table = "vendors";
    protected $fillable =["name", "address"];
    public function Products()
    {
        return$this->hasMany('App\Products');
    }
}
