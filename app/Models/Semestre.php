<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}