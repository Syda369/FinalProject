<?php

namespace App\Models;
use App\Models\ShipDiv;
use App\Models\ship_districts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipState extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function division(){
    	return $this->belongsTo(ShipDiv::class,'division_id','id');
    }

     public function district(){
    	return $this->belongsTo(ship_districts::class,'district_id','id');
    }


}
