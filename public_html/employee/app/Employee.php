<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   
    protected $fillable = ['admin_id','name','address','country','experience','company'];
    
    public function admin() {
       return $this->belongsTo('App\Admin');
    }
    
}
