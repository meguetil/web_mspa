<?php

use Illuminate\Database\Seeder;

class ArchivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Archivos')->insert([
            'tipo_norma' => 'Reglamento',
            'numero' => 'N°1',
            'denominacion' => 'Reglamento que establece la planta de personal de la Municipalidad de San Pedro de Atacama',
            'fecha_pub' => '2019-12-27',
            'fecha_mod' => 'N/A',
            'nombre_archivo' => 'reglamento N°1, planta personal municipalidad de San Pedro de Atacama',
            'link' => 'documentos/01/01/1.pdf',
            'user_id' => 1,
            'seccion_id' => 1,
        ]);

        DB::table('Archivos')->insert([
            'tipo_norma' => 'Ordenanza',
            'numero' => '04-2018',
            'denominacion' => 'Ordenanza sobre derechos municipales por concesiones, permisos, ocupación de bienes nacionales de uso público, publicidad, propaganda y otros servicios.',
            'fecha_pub' => '2018-11-06',
            'fecha_mod' => '2016-10-21',
            'nombre_archivo' => 'Ordenanza derechos varios año 2018 (D.O)',
            'link' => 'documentos/02/01/2.pdf',
            'user_id' => 1,
            'seccion_id' => 1,
        ]);

        DB::table('Archivos')->insert([
            'tipo_norma' => 'Ordenanza',
            'numero' => '04-2018',
            'denominacion' => 'Ordenanza sobre derechos municipales por concesiones, permisos, ocupación de Bienes Nacionales de uso Público, publicidad, propaganda y otros servicios.',
            'fecha_pub' => '2016-10-28',
            'fecha_mod' => '2015-11-04',
            'nombre_archivo' => 'Ordenanza N°004',
            'link' => 'documentos/02/01/3.pdf',
            'user_id' => 1,
            'seccion_id' => 1,
        ]);


    }
}
