<?php

use Illuminate\Database\Seeder;
use App\clientes;

class clientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(clientes::class, 80)->create();
    }
}
