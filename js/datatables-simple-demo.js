window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple, {
            labels: {
                placeholder: "Buscar...", // Placeholder del campo de búsqueda
                perPage: " entradas por página", // Entradas por página
                noRows: "No se encontraron entradas", // Texto cuando no hay filas
                info: "Mostrando {start} a {end} de {rows} entradas", // Información de la paginación
                // Puedes agregar o modificar más etiquetas según sea necesario
            }
        });
    }
});
