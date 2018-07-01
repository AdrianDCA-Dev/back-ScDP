<?php

use Illuminate\Database\Seeder;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facultad1 = new \App\Facultade();
        $facultad1->nombre = 'Facultade de Ciencias Jurídicas';
        $facultad1->descripcion = 'Impulsando la ética y estimulando el respeto por los derechos de las personas, como valores fundamentales de una sociedad organizada, formamos profesionales idóneos en el conocimiento de las Leyes y proclives al servicio de la Justica.';
        $facultad1->save();

        $facultad2 = new \App\Facultade();
        $facultad2->nombre = 'Facultade de Ciencias Empresariales';
        $facultad2->descripcion = 'Formamos líderes competentes, que permitan mejorar de forma proactiva las organizaciones, alcanzando objetivos al enfrentar de forma eficiente los retos que presentan los escenarios siempre cambiantes de nuestro mundo tecnológico y globalizado.';
        $facultad2->save();

        $facultad3 = new \App\Facultade();
        $facultad3->nombre = 'Facultade de Ciencias Sociales';
        $facultad3->descripcion = 'Maximizando las aptitudes comunicacionales, psicológicas, pedagógicas y de relaciones humanas de los futuros profesionales del área, aseguramos un futuro eficiente y efectivo en beneficio del entorno social donde se desempeñen';
        $facultad3->save();

        $facultad4 = new \App\Facultade();
        $facultad4->nombre = 'Facultade de Ingeniería';
        $facultad4->descripcion = 'Formamos profesionales competentes, innovadores, capaces de generar y aplicar con creatividad los conocimientos de su especialidad, de forma responsable y eficaz, con el más alto nivel de calidad.';
        $facultad4->save();

        $facultad5 = new \App\Facultade();
        $facultad5->nombre = 'Facultade de Ciencias de la Salud';
        $facultad5->descripcion = 'Creados para formar la Nueva Generación de Médicos del Siglo 21, idóneos en la aplicación de sus conocimientos, hábiles en el manejo tecnológico y sensibles a las necesidades de la comunidad.';
        $facultad5->save();
    }
}
