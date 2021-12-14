<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customerinfo extends Model
{

 protected $fillable = ['firstname','surname','othername','landmark','address','town','lga','state','phone','dob','maritalstatus','nationality','nokname','nokrelationship','nokaddress','nokphone','withdrawable','occupation','contribution','religion','passport','signature','idcard','accountno','bvn','balance','createdby','status','sms', ];

}
