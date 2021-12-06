<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    use HasFactory;

    //get doctor name relation between appointment with user table 
    public function cars(){
        return $this->belongsTo(Car::class,'id'); //salah sbb doctor id dekat appointment tak sama id di user
    }
}
