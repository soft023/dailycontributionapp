<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

	 protected $fillable = [
       'code', 'name', 'email','phone', 'address', 'status', 'logo', 'superusername','superemail', 'registeredby','moreinfo','otherinfo',
    ];
    //
}
