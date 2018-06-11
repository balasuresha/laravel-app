<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['name','address','country'];
    
    
    public function employee() {
        return $this->hasMany('App\Employee','admin_id');
    }
}
