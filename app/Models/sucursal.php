<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sucursal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'sucursales';

    //Relación muchos a muchos
    public function productos(){
        return $this->belongsToMany('App\Models\producto');
    } 
}
