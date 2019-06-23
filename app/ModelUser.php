<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    //
    protected $fillable = ['id_user','jenis_kelamin','no_tlp','jurusan','wilayah'];
    protected $table ='user_detail' ;

    public function user(){
        return $this->hasOne(user::class);
    }
}
