
<?php

class Pregunta {

    private $enunciado;
    private $opciones;
    private $correcta;

    public function __construct($enunciado, $opciones, $correcta) {
        $this->enunciado = $enunciado;
        $this->opciones = $opciones;
        $this->correcta = $correcta;
    }

    // Muestra el enunciado y las opciones de respuesta.
    public function mostrarPregunta($indice) {

		echo "<p>" . $this->enunciado . "</p>";

		foreach ($this->opciones as $i => $opcion) {

			echo "<input type='radio'
						 name='respuesta[$indice]'
						 value='$i'
						 required>";

			echo $opcion . "<br>";
		}
	}

    // Comprueba si la respuesta seleccionada es correcta.
    public function comprobarRespuesta($respuesta) {

        return $respuesta == $this->correcta;
    }
}


// Banco de preguntas.

$preguntas = [

    "cine" => [

        new Pregunta(
            "¿Quién dirigió Titanic (1997)?",
            ["Steven Spielberg", "James Cameron", "Ridley Scott", "Peter Jackson"],
            1
        ),

        new Pregunta(
            "¿En qué saga aparece Darth Vader?",
            ["Star Trek", "Matrix", "Star Wars", "Dune"],
            2
        ),

        new Pregunta(
            "¿Quién interpreta a Hermione Granger?",
            ["Emma Watson", "Keira Knightley", "Natalie Portman", "Anne Hathaway"],
            0
        ),

        new Pregunta(
            "¿Cuál es una película de Christopher Nolan?",
            ["Gladiator", "Origen", "Avatar", "Jurassic Park"],
            1
        ),

        new Pregunta(
            "¿En qué película aparece Woody?",
            ["Shrek", "Cars", "Toy Story", "Buscando a Nemo"],
            2
        )

    ],

    "ciencia" => [

        new Pregunta(
            "¿Cuál es el planeta más cercano al Sol?",
            ["Venus", "Marte", "Mercurio", "Júpiter"],
            2
        ),

        new Pregunta(
            "¿Qué gas absorben las plantas durante la fotosíntesis?",
            ["Oxígeno", "Dióxido de carbono", "Nitrógeno", "Hidrógeno"],
            1
        ),

        new Pregunta(
            "¿Cuál es el símbolo químico del oro?",
            ["Ag", "Fe", "O", "Au"],
            3
        ),

        new Pregunta(
            "¿Qué órgano bombea la sangre?",
            ["Pulmón", "Hígado", "Corazón", "Riñón"],
            2
        ),

        new Pregunta(
            "¿Cuántos lados tiene un hexágono?",
            ["Cinco", "Seis", "Siete", "Ocho"],
            1
        )

    ],

    "deporte" => [

        new Pregunta(
            "¿Cuántos jugadores tiene un equipo de fútbol en el campo?",
            ["9", "10", "11", "12"],
            2
        ),

        new Pregunta(
            "¿En qué deporte se utiliza un volante?",
            ["Bádminton", "Tenis", "Baloncesto", "Voleibol"],
            0
        ),

        new Pregunta(
            "¿Cada cuántos años se celebran los Juegos Olímpicos de verano?",
            ["Dos", "Tres", "Cuatro", "Cinco"],
            2
        ),

        new Pregunta(
            "¿En qué deporte destaca Wimbledon?",
            ["Golf", "Tenis", "Rugby", "Atletismo"],
            1
        ),

        new Pregunta(
            "¿Cuántos puntos vale un tiro libre encestado en baloncesto?",
            ["1", "2", "3", "4"],
            0
        )

    ]

];

?>
