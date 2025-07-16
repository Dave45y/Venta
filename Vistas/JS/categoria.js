//Creo una variable tabla

var tabla;

//Creo una funcion int que se ejecuta al inicio de la aplicación
function init() {
    mostrarform(false);
    listar();
    //Llamamos a la funcion guardar y editar
    $("#formulario").on("submit", function (e) {
        guardaryeditar(e);
    });
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

//Creamos una funcion para listar los datos de la base de datos
function listaar() {
    tabla = $('#tbllistado').dataTable(
        {
            "aProcessing": true, //Activamos el procesamiento del datatable
            "aServerSide": true, //Paginacion y filtrado realizados por el servidor
            dom: 'Bfrtip', //Definimos los elementos del control de la tabla
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
            ],
            "ajax": {
                url: "../Controladores/categoria.php?op=listar",
                type: "get",
                dataType: "json",
                error: function (e) {
                    console.log(e.response)
                }
            },
            "bDestroy": true,
            "iDispalyLength": 5, //Paaginacion
            "order": [[0, "desc"]] // Ordenar (Columna, orden)
        }).DataTable();
}
//Funcion para guardar y editar los datos
function guardaryeditar(e) {
    //no se activa la accion predeterminada del evento
    e.preventDefault();
    $("#btnGuardar").prop("disabled", true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../Controladores/categoria.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contenType: false,
        processData: false,


        success: function (datos) {
            bootbox.alert(datos);
            mostrarform(false);
            console.log("hola");
            tabla.ajax.reload();
        }
    });
    limpiar();
}
//Ejecutamos la funcion init
init();
