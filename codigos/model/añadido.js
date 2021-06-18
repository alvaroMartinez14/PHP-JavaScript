window.onload = iniciar;

function iniciar() {
    document.getElementById("añade").addEventListener('click', añadido, false);
}

function añadido() {
    alert("Añadido con exito");
}
