window.onload = iniciar;

function iniciar() {
    document.getElementById("loguearse").addEventListener('click', validaNombre, false);
    document.getElementById("loguearse").addEventListener('click', validaPass, false);
}

function validaNombre() {
    var elemento = document.getElementById("user");
    if (elemento.value == "") {
        alert("El campo usuario no puede estar vacio");
        return false;
    }
    return true;
}

function validaPass() {
    var elemento = document.getElementById("pass");
    if (elemento.value == "") {
        alert("El campo contraseña no puede estar vacio");
        return false;
    }
    return true;
}
