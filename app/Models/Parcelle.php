<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcelle extends Model
{
    use HasFactory;
    protected $fillable = [
        'Par_Nom',
        'Par_Lieu',
        'Par_Superficie',
        'Par_Prop'
    ];
    public function agriculteur()
  {
    return $this->belongsTo(Agriculteur::class);
  }
}
