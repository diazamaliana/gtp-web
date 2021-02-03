<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;


class Place extends Model

{
    
    protected $fillable = ['title','body','user_id','slug', 'filename'];
   
    public function user()
    {
        return $this->belongsTo('App\User');
    }

   

    
   
        

    

    
 

}
