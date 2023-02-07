<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }
}
