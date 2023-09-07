<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Persona extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected function name(): Attribute{
        return Attribute::make(

            get: fn($value) => ucwords($value)
            ,

            set: fn($value)=> strtolower($value)
           
        ) ;
    }

}
