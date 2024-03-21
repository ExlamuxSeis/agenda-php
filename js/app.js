function eliminar(){
    if(confirm('¿Desea eliminar elregistro?')===false) event.preventDefault()
}

var tabla = document.querySelector('#miTable');
var dataTable = new DataTable(tabla, {
    // Cantidad de registros a mostrar
    perPage: 15,
    perPageSelect: [15, 30, 45, 60],
    labels: {
        placeholder: "Buscar...",
        perPage: "{select} registros por página",
        noRows: "No se encontraron registros",
        info: "Mostrando {start} a {end} de {rows} registros",
    }
});