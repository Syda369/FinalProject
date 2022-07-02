<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ship_districts extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function division(){
    	return $this->belongsTo(ShipDiv::class,'division_id','id');
    }


}
