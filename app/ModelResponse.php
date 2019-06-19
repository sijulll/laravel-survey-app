<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelResponse extends Model
{
    //Table Response
    protected $table ='response';
    protected $fillable =['response'];

    public function survey()
    {
        return $this->belongsTo(ModelSurvei::class);
    }
    public function pertanyaan()
    {
        return $this->belongsTo(ModelPertanyaan::class);
    }
}
