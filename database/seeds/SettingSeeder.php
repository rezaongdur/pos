<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Insert some stuff
        DB::table('settings')->insert(
            array(
                'id' => 1,
                'email' => 'admin@admin.com',
                'currency_id' => 1,
                'client_id' => 1,
                'warehouse_id' => Null,
                'CompanyName' => 'Reza',
                'CompanyPhone' => '6287869675234',
                'CompanyAdress' => 'Kota Baru, Rangkasbitung Lebak',
                'footer' => 'Rahmat - Aplikasi Kasir dan Stok Barang',
                'developed_by' => 'Reza',
                'logo' => 'logo-default.png',
            )
            
        );
    }
}
