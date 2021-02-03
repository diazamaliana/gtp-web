<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    
    protected $fillable = ['title','body','user_id','slug', 'price','filename'];
   
    public function user()
    {
        return $this->belongsTo('App\User');
    }

   

    
   
        

    

    
 

}

