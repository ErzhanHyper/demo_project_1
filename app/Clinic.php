<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
   protected $fillable = [
     'name', 'city_id', 'address'
  ];
}
