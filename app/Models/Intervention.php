<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;
    protected $fillable = [
        'Int_Emp_Nss',
        'Int_Par_Id',
        'Int_Debut',
        'Int_Nb_Jours'
    ];
    public function employe()
    {
      return $this->belongsTo(Employe::class);
    }

    public function parcelle_inter()
    {
      return $this->belongsTo(Parcelle::class);
    }
}
