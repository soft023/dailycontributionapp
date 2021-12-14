<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officerbyreport extends Model
{
    protected $fillable = [
	'officer','customer','accountno','deposit', 'withdrawal','balance','posters', 
    ];
}
