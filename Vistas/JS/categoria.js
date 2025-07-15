var tabla;

//Creo una funcion int que se ejecuta al inicio de la aplicación
function init() {
    mostrarform(false);
}

//Creo una función para limpiar el formulario
function limpiar() {
    $("#idcategoria").val("");
    $("#nombre").val("");
    $("#descripcion").val("");
    
}

//Función para mostrar el formulario
function mostrarform(flag) {
    limpiar();
    if (flag) {
        $("#listadoregistro").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled", false);
        $("#btnAgregar").hide();
    } else {
        $("#listadoregistro").show();
        $("#formularioregistros").hide();
        $("#btnAgregar").show();
    }
}

//Función para cancelar el formulario
function cancelarform() {
    limpiar();
    mostrarform(false);
}

//Ejecutamos la funcion init
init();
