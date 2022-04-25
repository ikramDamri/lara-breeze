<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;
    protected $primaryKey = 'tar_description';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $casts = ['tar_description' => 'string'];

    protected $fillable = [
        'Tar_Description',
        'Tar_Euro'
    ];
    public function employe()
    {
        return $this->hasMany(Employe::class);
    }
}
