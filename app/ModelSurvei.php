<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSurvei extends Model
{
    //Table Survei
    protected $fillable = ['judul_survei','deskripsi_survei','id_user'];
    protected $dates =['deleted_at'];
    protected $table = 'survei';

    public function pertanyaan()
    {
        return $this->hasMany(ModelPertanyaan::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function response()
    {
        return $this->hasMany(ModelResponse::class);
    }
    public function kategori()
    {
        return $this->belongsTo(ModelKategori::class);
    }
}
