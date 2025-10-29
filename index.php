<?php
include('includes/ask_conexion.php');
conectar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizMaster</title>
    <link rel="stylesheet" href="css/ask_estilos.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#inicio">Incio</a></li>
            <li><a href="#juego">Juego</a></li>
            <li><a href="#resultado">Resultados</a></li>
        </ul>
    </nav>

    <section id="inicio">
        <h1>Bienvenido a QuizMaster</h1>
        <p>¡Pon a prueba tus conocimientos con nuestros emocionantes quizzes!</p>
        <button onclick="startQuiz()">Comenzar Quiz</button>
    </section>

    <section id="juego">
        <div id="pregunta-container">
            <h2 id="pregunta-texto"></h2>
            <div id="opciones-container">
                <button onclick="verificarRespuesta(1)" id="opcion1"></button>
                <button onclick="verificarRespuesta(2)" id="opcion2"></button>
                <button onclick="verificarRespuesta(3)" id="opcion3"></button>
            </div>
        </div>
    </section>

    <section id="resultado">
        <h2>Resultados</h2>
        <p id="score">Tu puntuación: 0</p>
        <div id="guardar-puntaje" style="display:none">
            <input type="text" id="nombre-jugador" placeholder="Tu nombre">
            <button onclick="guardarPuntaje()">Guardar Puntaje</button>
        </div>
        <button onclick="restartQuiz()">Reiniciar Quiz</button>
        
        <div id="mejores-puntajes">
            <h3>Mejores Puntajes</h3>
            <table id="tabla-puntajes">
                <tr>
                    <th>Nombre</th>
                    <th>Puntaje</th>
                </tr>
            </table>
        </div>
    </section>

    <script src="js/ask_script.js"></script>


    <?php
    $sql = mysqli_query($con, "SELECT pregunta, respuesta1, respuesta2, respuesta3 FROM ask_preguntas") or die("Error en la consulta: " . mysqli_error($con));

        if ($preg = mysqli_fetch_array($sql)) {
        echo "<div id='pregunta-container'>";
        echo "<h2 id='pregunta'>" . $preg['pregunta'] . "</h2>";
        echo "<div id='opciones-container'>";
        echo "<button onclick='verificarRespuesta(1)' id='opcion1'>" . $preg['respuesta1'] . "</button>";
        echo "<button onclick='verificarRespuesta(2)' id='opcion2'>" . $preg['respuesta2'] . "</button>";
        echo "<button onclick='verificarRespuesta(3)' id='opcion3'>" . $preg['respuesta3'] . "</button>";
        echo "</div>";
        echo "</div>";
    }
    ?>

</body>
</html>