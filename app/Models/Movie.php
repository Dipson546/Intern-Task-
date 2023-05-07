<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute as CastsAttribute;
use Illuminate\Database\Eloquent\Attribute;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['name',  'description',  
     'images'];

    protected $casts = [
        'images' => 'array'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }


    public function thumbnail(): CastsAttribute {
        return CastsAttribute::get(function($value, $attrib) {
            return json_decode($attrib['images'])[0];
        });
    }




   
}
