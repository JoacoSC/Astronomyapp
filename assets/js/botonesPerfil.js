
function toggle() {
    document.getElementById("EditarNombre").disabled = !document.getElementById("EditarNombre").disabled;
}

var button = document.getElementById('BotonEditarNombre')
button.addEventListener('click',ocultarBoton,false);

function ocultarBoton() {
    var actualizar = document.getElementById('BotonActualizarNombre');
    var cancelar = document.getElementById('BotonCancelarNombre');
    document.getElementById('BotonEditarNombre').style.display = 'block'; 
    this.style.display = 'none';
    actualizar.style.display = "block";
    cancelar.style.display = "block";
}

