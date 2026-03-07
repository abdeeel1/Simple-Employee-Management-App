<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    //
    protected $table = "employes";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom', 'email', 'poste', 'salaire', 'status'
    ];
}
