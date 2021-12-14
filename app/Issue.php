<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
	'name','accountno', 'phoneno','contribution','difference','poster','status', 
    ];
}
