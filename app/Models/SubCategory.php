<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable=[
     'category_id',
     'subCategory_name',
     'subCategory_name_slug',

    ];
    public function Category(){
        return $this->belongsTo(Category::class,'category_id','id');

    }
}
