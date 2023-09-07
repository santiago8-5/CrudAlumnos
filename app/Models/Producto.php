<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected function name(): Attribute{
        return Attribute::make(

            get: function($value){
                return strtoupper($value);
            },


            set: function($value){
                return strtolower($value);
            }
        ) ;
    }





}
