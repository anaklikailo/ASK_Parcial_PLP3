let puntaje = 0;
let preguntaActual = 0;

function startQuiz() {
    document.getElementById('inicio').style.display = 'none';
    document.getElementById('juego').style.display = 'block';
    document.getElementById('resultado').style.display = 'none';
    cargarPregunta();
}


function restartQuiz() {
    puntaje = 0;
    preguntaActual = 0;
    startQuiz();
}