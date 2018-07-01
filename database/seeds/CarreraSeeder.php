<?php

use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $derecho = new \App\Carrera();
        $derecho->facultad_id = 1;
        $derecho->nombre = 'Derecho';
        $derecho->descripcion = 'Un abogado probo al servicio de la ley, es la primera garantía de justicia para las personas.';
        $derecho->save();

        $comercial = new \App\Carrera();
        $comercial->facultad_id = 2;
        $comercial->nombre = 'Ingeniería Comercial';
        $comercial->descripcion = 'La gestión estratégica que crea y desarrolla negocios exitosos, tiene un conductor profesional: el Ingeniero Comercial.';
        $comercial->save();

        $marketing = new \App\Carrera();
        $marketing->facultad_id = 2;
        $marketing->nombre = 'Maketing y Publicidad';
        $marketing->descripcion = 'Detrás de una marca exitosa, siempre encontrarás un profesional del Marketing y la Publicidad verdaderamente eficiente.';
        $marketing->save();

        $adempresas = new \App\Carrera();
        $adempresas->facultad_id = 2;
        $adempresas->nombre = 'Administración de Empresas';
        $adempresas->descripcion = 'n buen Administrador es la clave del éxito en las empresas y todo tipo de organizaciones.';
        $adempresas->save();

        $contaduria = new \App\Carrera();
        $contaduria->facultad_id = 2;
        $contaduria->nombre = 'Contaduría Pública';
        $contaduria->descripcion = 'La vital información financiera de una organización, es generada por el trabajo de un buen contador público.';
        $contaduria->save();

        $psicologia = new \App\Carrera();
        $psicologia->facultad_id = 3;
        $psicologia->nombre = 'Psicología';
        $psicologia->descripcion = 'Esa mano amiga que te colabora a cruzar por las aguas turbulentas en la vida, se llama psicología.';
        $psicologia->save();

        $psicopedagog = new \App\Carrera();
        $psicopedagog->facultad_id = 3;
        $psicopedagog->nombre = 'Psicopedagogía';
        $psicopedagog->descripcion = 'Quien coopera en la solución de problemas de aprendizaje, entre individuo y didáctica, a lo largo de la vida, es un psicopedagogo.';
        $psicopedagog->save();

        $relaciones = new \App\Carrera();
        $relaciones->facultad_id = 3;
        $relaciones->nombre = 'Relaciones Públicas';
        $relaciones->descripcion = 'En este mundo de redes y contactos, las entidades necesitan expertos para gestionar estratégicamente sus vínculos con responsabilidad y transparencia: los Relacionistas Públicos.';
        $relaciones->save();

        $turismo = new \App\Carrera();
        $turismo->facultad_id = 3;
        $turismo->nombre = 'Gestión del Turismo';
        $turismo->descripcion = 'El impacto económico positivo que causa en un país su “industria sin chimeneas” depende de una correcta gestión del turismo.';
        $turismo->save();

        $relacionesin = new \App\Carrera();
        $relacionesin->facultad_id = 3;
        $relacionesin->nombre = 'Relaciones Internacionales';
        $relacionesin->descripcion = 'Un factor de éxito para los países en desarrollo es tener buenos “internacionalistas” que sepan dinamizar sus relaciones.';
        $relacionesin->save();

        $comunicacion = new \App\Carrera();
        $comunicacion->facultad_id = 3;
        $comunicacion->nombre = 'Ciencias de la Comunicación Social';
        $comunicacion->descripcion = 'En nuestro mundo globalizado, el vínculo entre los hechos y el gran público se llama “comunicador social”.';
        $comunicacion->save();

        $sistemas = new \App\Carrera();
        $sistemas->facultad_id = 4;
        $sistemas->nombre = 'Ingeniería de Sistemas';
        $sistemas->descripcion = 'El Ingeniero de Sistemas nos permite aprovechar mejor las maravillas de la informática, en todas nuestras actividades humanas.';
        $sistemas->save();

        $civil = new \App\Carrera();
        $civil->facultad_id = 4;
        $civil->nombre = 'Ingeniería Civil';
        $civil->descripcion = 'Ingeniería Civil';
        $civil->save();

        $industrial = new \App\Carrera();
        $industrial->facultad_id = 4;
        $industrial->nombre = 'Ingeniería Industrial';
        $industrial->descripcion = 'La ingeniería que provocó una verdadera revolución en el desarrollo de la economía mundial, es la ingeniería industrial.';
        $industrial->save();

        $petrolera = new \App\Carrera();
        $petrolera->facultad_id = 4;
        $petrolera->nombre = 'Ingeniería en Gestión Petrolera';
        $petrolera->descripcion = 'Aquel profesional que mantiene viva una de las industrias más importantes en el mundo actual, es el ingeniero en Gestión Petrolera.';
        $petrolera->save();

        $ambiental = new \App\Carrera();
        $ambiental->facultad_id = 4;
        $ambiental->nombre = 'Ingeniería en Gestión Ambiental';
        $ambiental->descripcion = 'Es desarrollo sostenible, tan vital para la supervivencia de nuestro planeta, está en manos de Ingenieros en Gestión Ambiental.';
        $ambiental->save();

        $redesytelecomunicaciones = new \App\Carrera();
        $redesytelecomunicaciones->facultad_id = 4;
        $redesytelecomunicaciones->nombre = 'Ingeniería en Redes y Telecomunicaciones';
        $redesytelecomunicaciones->descripcion = 'La trascendencia global que cobra esta profesión en la actualidad es proporcional al impacto de las NTic´s en el mundo de hoy.';
        $redesytelecomunicaciones->save();

        $medicina = new \App\Carrera();
        $medicina->facultad_id = 5;
        $medicina->nombre = 'Medicina';
        $medicina->descripcion = 'Un médico, ante todo, es un profesional de la salud, con una gran vocación de servicio social, es el responsable de la prevención, tratamiento y cura de las enfermedades prevalentes en su entorno y tiene hoy, gracias a los avances de la tecnología, una serie de recursos que debe utilizar con habilidad y destreza para conseguir sus nobles objetivos.';
        $medicina->save();

    }
}
