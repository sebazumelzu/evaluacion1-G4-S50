<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodsucursal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'productossucursales';

    //Relación muchos a muchos
    public function sucursales(){
        return $this->belongsToMany('App\Models\sucursal');
    }

    public function productos(){
        return $this->belongsToMany('App\Models\producto');
    }


}
