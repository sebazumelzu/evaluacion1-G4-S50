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
            ],
            [
                'prod_id'=>'2',
                'suc_id'=>'3',
                'precioProd'=>'1990',
                'stockProd'=>'50'
            ],[
                'prod_id'=>'3',
                'suc_id'=>'2',
                'precioProd'=>'8990',
                'stockProd'=>'30'
            ],
            [
                'prod_id'=>'1',
                'suc_id'=>'3',
                'precioProd'=>'3000',
                'stockProd'=>'100'
            ]  
            ));
    }
}
