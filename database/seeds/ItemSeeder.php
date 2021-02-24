<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Items')->insert([
            'nombre_item' => 'PUBLICACIONES EN DIARIO OFICIAL',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'POTESTADES Y MARCO NORMATIVO',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'ESTRUCTURA ORGÁNICA Y FACULTADES, FUNCIONES Y ATRIBUCIONES',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'PERSONAL Y REMUNERACIONES',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'ADQUISICIONES Y CONTRATACIONES',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'INFORMACIÓN PRESUPUESTARIA',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'TRANSFERENCIAS DE FONDOS Y APORTES ECONÓMICOS ENTREGADOS',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'ACTOS Y RESOLUCIONES CON EFECTOS SOBRE TERCEROS',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'SUBSIDIOS Y BENEFICIOS',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'PARTICIPACIÓN CIUDADANA',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'LOBBY Y GESTIÓN DE INTERESES',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'TRÁMITES ANTE EL ORGANISMO',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'DOCUMENTOS RESERVADOS',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'COSTOS DE REPRODUCCIÓN',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'ANTECEDENTES PREPARATORIOS DE LAS NORMAS JURÍDICAS',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'DIFICULTADES TÉCNICAS, VISUALIZADORES & PLUG-INS',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'OTROS ANTECEDENTES',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'FISCALIZACIONES Y AUDITORIAS A LA GESTIÓN',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'INFORME ANUAL A LA SUBDERE',
        ]);
        DB::table('Items')->insert([
            'nombre_item' => 'PARTICIPACIÓN EN OTRAS ENTIDADES',
        ]);

        DB::table('Items')->insert([
            'nombre_item' => 'DECLARACIÓN DE PATRIMONIO E INTERESES LEY 20.880',
        ]);
    }
}
