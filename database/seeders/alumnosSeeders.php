<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class alumnosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("alumnos")->truncate();

        DB::table("alumnos")->insert([
            "nombre"=>"Santiago",
            "apellidos"=>"Luque Lolo",
            "DNI"=>"4311111F" 
        ]);
        DB::table("alumnos")->insert([
            "nombre"=>"Miguel",
            "apellidos"=>"Fernandez Lolo",
            "DNI"=>"444311F" 
        ]);
        DB::table("alumnos")->insert([
            "nombre"=>"Toni",
            "apellidos"=>"Galmes Real",
            "DNI"=>"43166511F" 
        ]);
                
     }
}
