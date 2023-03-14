<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [ 'nom', 'prenom', 'lage', 'adresse', 'telephone', 'prof_id', 'cour_id', 'classe_id' ];
    
    public function prof()
    {
        return $this->belongsTo(Prof::class, 'prof_id');
    }

    public function cour()
    {
        return $this->belongsTo(Cours::class, 'cour_id');
    }
    
    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id');
    }
    
}
