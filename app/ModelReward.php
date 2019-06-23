<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelReward extends Model
{
    //Table Reward
    protected $table ='reward' ;

    public function user(){
        return $this->hasMany(user::class);
    }
}
