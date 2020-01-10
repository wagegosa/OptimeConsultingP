//Archivo JavaScript de configuracion footable
jQuery(function ($) {
    $('.table').footable({
        //Si la tabla no contiene filas
        "empty": "No hay registros.",
        //Paginación de registros
        "paging": {
            "enabled": true,
            "position": "center",
            "countFormat": "Pág. {CP} de {TP} | Registro {PF} a {PL} de {TR}",
            "limit": 3, //Límite de páginas
            "size": 10 //Número de registros por pantalla.
        },
        //Filtrado de registros
        "filtering": {
            "enabled": false,
            "dropdownTitle": "Buscar por:",
            "placeholder": "Buscar...",
            "position": "rigth"
        },
        //Ordenamiento de registros
        "sorting": {
            "enabled": false
        }
    });
});
