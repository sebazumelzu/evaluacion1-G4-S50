<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'productos';

    
    public function categorias(){
        return $this->belongsTo(Categoria::class, 'cate_id');
    }
    
    //Relación muchos a muchos
    public function sucursales(){
        return $this->belongsToMany('App\Models\sucursal');
    }

}
