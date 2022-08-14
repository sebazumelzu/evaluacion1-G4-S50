<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(
            [
                'nomCat'=> 'Verdura'
            ],    
            
            [
                'nomCat'=> 'Fruta'
            ],
            
            [
                'nomCat'=> 'Aseo'
            ]       
            ));
    }
}
