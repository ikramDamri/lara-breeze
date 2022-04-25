<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = [
        'Emp_Nss',
        'Emp_Nom',
        'Emp_Prn',
        'Emp_Tarif'
    ];
    public function employe()
    {
        return $this->hasMany(Employe::class);
    }


















    protected $primaryKey = 'Emp_Nss';
    public $incrementing = false;
    protected $keyType = 'string';
}
