<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProdSuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productossucursales')->insert(array(
            [
                'prod_id'=>'1',
                'suc_id'=>'1',
                'precioProd'=>'3000',
                'stockProd'=>'100'
            ]        
            ));
    }
}
