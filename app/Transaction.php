<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
     protected $fillable = [
        'refrenceno','name','accountno','dr','cr','balance','postcode','narration','postedby','accountofficer'	
    ];
}
