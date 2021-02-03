<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;


class Post extends Model

{
    
    protected $fillable = ['title','body','user_id','slug', 'image'];
   
    public function user()
    {
        return $this->belongsTo('App\User');
    }

   

    
   
        

    

    
 

}
