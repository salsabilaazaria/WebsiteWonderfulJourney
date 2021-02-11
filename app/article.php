<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
 
    public function user(){
        $this->belongsTo(User::class);
    }
}
