<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productossucursal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'productossucursales';

    public function productos(){
        return $this->belongsTo(Producto::class, 'prod_id');
    }

    public function sucursales(){
        return $this->belongsTo(Sucursal::class, 'suc_id');
    }
}
