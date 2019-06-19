<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPertanyaan extends Model
{
    // Table Pertanyaan
    protected $table = 'pertanyaan';
    protected $cast = ['opsi_pertanyaan' => 'array',];
    protected $fillable = ['id_user','id_tipe_pertanyaan','pertanyaan','opsi_pertanyaan'];

    public function survey()
    {
        return $this->belongsTo(ModelSurvei::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function answer()
    {
        return $this->hasMany(ModelResponse::class);
    }

}
