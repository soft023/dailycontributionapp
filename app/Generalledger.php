<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalledger extends Model
{
 protected $fillable = [
	'name', 'glcode','bankone','balance','officer','createdby', 'status', 
    ];
}
