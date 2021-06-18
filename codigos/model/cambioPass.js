window.onload = iniciar;

function iniciar() {
    document.getElementById("cambioPass").addEventListener('click', cambioPass, false);
}

function cambioPass() {
    alert("Contraseña cambiada con exito");
}
