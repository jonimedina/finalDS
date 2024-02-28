<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estudiante::create([
            'nombre' => 'Diego',
            'apellido' => 'Paez',
            'dni' => '47585962',
            'mail' => 'diego_paez@mail.com',
            'escuela' => 'ET 8 DE 13',
            'materia1' => 'Matemática',
            'aniomateria1' => 1,
            'materia2' => 'Geografía',
            'aniomateria2' => 1,
            'retiro' => '0',
        ]);

        Estudiante::create([
            'nombre' => 'Julian',
            'apellido' => 'Calvo',
            'dni' => '47585920',
            'mail' => 'julian_calvo@mail.com',
            'escuela' => 'ET 23 DE 13',
            'materia1' => 'Tecnología de la Representación',
            'aniomateria1' => 1,
            'materia2' => 'Matemática',
            'aniomateria2' => 1,
            'retiro' => '0',
        ]);

        Estudiante::create([
            'nombre' => 'Gabriela',
            'apellido' => 'Gimenez',
            'dni' => '41585929',
            'mail' => 'gabriela_gimenez@mail.com',
            'escuela' => 'ET 8 DE 13',
            'materia1' => 'Matemática',
            'aniomateria1' => 1,
            'materia2' => 'Fisica',
            'aniomateria2' => 2,
            'retiro' => '0',
        ]);

        Estudiante::create([
            'nombre' => 'Leandro',
            'apellido' => 'Garcia',
            'dni' => '475859111',
            'mail' => 'leandro_garcia@mail.com',
            'escuela' => 'ET 17 DE 13',
            'materia1' => 'Tecnología de la Representación',
            'aniomateria1' => 2,
            'materia2' => 'Fisica',
            'aniomateria2' => 2,
            'retiro' => '0',
        ]);

        Estudiante::create([
            'nombre' => 'Gabriela',
            'apellido' => 'Lopez',
            'dni' => '475859781',
            'mail' => 'gabriela_lopez@mail.com',
            'escuela' => 'ET 17 DE 13',
            'materia1' => 'Tecnología de la Representación',
            'aniomateria1' => 1,
            'materia2' => 'Geografia',
            'aniomateria2' => 1,
            'retiro' => '1',
        ]);

        Estudiante::create([
            'nombre' => 'Máximo',
            'apellido' => 'Caceres',
            'dni' => '475859781',
            'mail' => 'máximo_caceres@mail.com',
            'escuela' => 'ET 23 DE 13',
            'materia1' => 'Tecnología de la Representación',
            'aniomateria1' => 2,
            'materia2' => 'Historia',
            'aniomateria2' => 2,
            'retiro' => '0',
        ]);



    }
}