<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
        [
            'codProd'=>'1',
            'nomProd'=>'palta',
            'desProd'=>'una palta',
            'cate_id' => '1'
        ]        
        ));
    }
}
