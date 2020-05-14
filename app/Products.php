<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    protected $fillable =["vendors_id", "name", "price"];
    public function Vendors()
    {
        return$this->belongsTo('App\Vendors');
    }
}
