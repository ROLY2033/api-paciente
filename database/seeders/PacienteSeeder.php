<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
        	[
	        	'firstName' => 'Alex Oscar',
	        	'lastName' => 'Gamarra Solis',
	        	'age' => 28,
	        	'sex' => 'Masculino',
	        	'dni' => 70218511,
	        	'blood_type' => 'A+',
	        	'telephone' => 943124351,
	        	'email' => 'alex@gmail.com',
	        	'direction' => 'Jr. Ramón Castilla 110'
        	],
        	[
	        	'firstName' => 'María Perla',
	        	'lastName' => 'Saruc Main',
	        	'age' => 34,
	        	'sex' => 'Femenino',
	        	'dni' => 80218522,
	        	'blood_type' => 'A-',
	        	'telephone' => 952312435,
	        	'email' => 'maria@gmail.com',
	        	'direction' => 'Jr. Manuel Ruíz 230'
        	],
        	[
	        	'firstName' => 'Julio Ramón',
	        	'lastName' => 'Quiroga Hasher',
	        	'age' => 52,
	        	'sex' => 'Masculino',
	        	'dni' => 23219913,
	        	'blood_type' => 'A+',
	        	'telephone' => 977123331,
	        	'email' => 'julio@gmail.com',
	        	'direction' => 'Jr. Enrique Palacios 202'
        	],
        	[
        		'firstName' => 'Mario Idalgo',
				'lastName' => 'Cuerbo Nieto',
				'age' => 18,
				'sex' => 'Masculino',
				'dni' => 80218511,
				'blood_type' => 'B+',
				'telephone' => 932112351,
				'email' => 'mario@gmail.com',
				'direction' => 'Jr. Manuel Ruiz 800'
        	],
        	[
        		'firstName' => 'María Rosa',
        		'lastName' => 'Jara Uri',
				'age' => 40,
				'sex' => 'Femenino',
				'dni' => 62215777,
				'blood_type' => 'AB+',
				'telephone' => 951774351,
				'email' => 'maría@gmail.com',
				'direction' => 'Jr. Ramón Castilla 401'
        	],
        	[
        		'firstName' => 'Kevin Juan',
				'lastName' => 'Rodriguez Ezquivel',
				'age' => 49,
				'sex' => 'Masculino',
				'dni' => 78218555,
				'blood_type' => 'A+',
				'telephone' => 934994351,
				'email' => 'kevin@gmail.com',
				'direction' => 'Jr. Alfonso Ugarte 2020'
        	],
        	[
        		'nombres' => 'Cielo Celeste',
				'lastName' => 'Lázaro Peterson',
				'age' => 50,
				'sex' => 'Femenino',
				'dni' => 23888591,
				'blood_type' => 'A-',
				'telephone' => 971661152,
				'email' => 'cielo@gmail.com',
				'direction' => 'Jr. Francisco Bolognesi'
        	]
        ]);


    }
}
