<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemoCauThu extends Model
{
    protected $table= 'cauthu';
    protected $fillable=['id','name','age','positon','salary'];
    
}
