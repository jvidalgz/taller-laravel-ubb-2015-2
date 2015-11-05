<?php

use Illuminate\Database\Seeder;

class RamosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $ramos = [
            'CALCULO',
            'ALGREBRA',
            'INTRODUCCION A LA PROGRAMACION',
            'INTRODUCCION A LA INGENIERIA',
            'LENGUAJE Y COMUNICACION',
            'CALCULO II',
            'ALGEBRA II',
            'ESTRUCTURAS DISCRETAS PARA Cs. DE LA COMPUTACION',
            'DISEÑO Y CONSTRUCCION DE ALGORITMOS',
            'ECONOMIA',
            'ESTADISTICA Y PROBABILIDAD',
            'ARQUITECTURA DE COMPUTADORAS',
            'ESTRUCTURA DE DATOS',
            'GESTION EMPRESARIAL',
            'INGLES I',
            'INVESTIGACION OPERATIVA',
            'MODELAMIENTO DE LA INFORMACION',
            'PARADIGMAS DE PROGRAMACION',
            'ANALISIS Y DISEÑO DE ALGORITMOS',
            'INGLES II',
            'PRACTICA PROFESIONAL 1',
            'BASE DE DATOS',
            'SISTEMAS OPERATIVOS',
            'SISTEMAS DE INFORMACION',
            'SISTEMAS FINANCIEROS Y CONTABLES',
            'FORMULACION Y EVALUACION DE PROYECTOS',
            'ELECTIVO 1',
            'ELECTIVO 2',
            'ELECTIVO 3',
            'TALLER DE BASE DE DATOS',
            'INGENIERIA DE SOFTWARE',
            'METODOLOGIA DESARROLLO',
            'COMUNICACION DE DATOS Y REDES',
            'INGLES IV',
            'INTELIGENCIA ARTIFICIAL',
            'TALLER DE INGENIERIA DE SW',
            'GESTION ESTRATEGICA',
            'FORMACION GENERAL',
            'PRACTICA PROFESIONAL II',
            'PROYECTO DE SW APLICADO'
        ];

        $creditos=[2,4,5,6];

        for ($i = 0; $i < 40; $i++) {
            \DB::table('ramos')->insert([
                'codigo' => $faker->numberBetween($min = 100000, $max = 699999),
                'nombre'=>$ramos[$i],
                'descripcion'=>$faker->sentence($nbWords = 10),
                'creditos'=>$faker->randomElement($creditos),
                'estado'=>$faker->boolean($chanceOfGettingTrue = 80),
            ]);
        }
    }
}
