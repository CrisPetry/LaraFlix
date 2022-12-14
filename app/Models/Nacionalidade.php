<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidade extends Model
{
    use HasFactory;
    protected $table = "nacionalidades";
    protected $fillable = ['descricao'];

    public function atores(){
        return $this->hasMany("App\Models\Ator");
    }
}
