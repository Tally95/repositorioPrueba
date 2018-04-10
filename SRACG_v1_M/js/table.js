$(document).ready(function () {
    
    /**
     * Funcion para añadir una nueva fila en la tabla
     */

    $("#add").click(function () {

        var numEntrada = document.getElementById("entrada").value;
        var entrada = "";
        var precio = 0;
        var simbolo = "";
        var cant = document.getElementById("cant").value;
        if (numEntrada == 1) {
            entrada = "Mujer(es)";
            precio = 1000;
            simbolo = "₡";
        } else if (numEntrada == 2) {
            entrada = "Hombre(s)";
            precio = 1000;
            simbolo = "₡";
        } else if (numEntrada == 3) {
            entrada = "Niña(s)";
            precio = 500;
            simbolo = "₡";
        } else if (numEntrada == 4) {
            entrada = "Niño(s)";
            precio = 500;
            simbolo = "₡";
        } else if (numEntrada == 5) {
            entrada = "Mujer(es) Extranjera(s)";
            precio = 20;
            simbolo = "$";
        } else if (numEntrada == 6) {
            entrada = "Hombre(s) Extranjero(s)";
            precio = 20;
            simbolo = "$";
        } else if (numEntrada == 7) {
            entrada = "Niña(s) Extranjera(s)";
            precio = 10;
            simbolo = "$";
        } else if (numEntrada == 8) {
            entrada = "Niño(s) Extranjero(s)";
            precio = 10;
            simbolo = "$";
        }
        
        ////        if (numEntrada == 3) {
//            entrada = "Estudiante(s)";
//            precio = 100;
//            simbolo = "₡";
//        } else 

        var nuevaFila = '<tr>' +
                '<td>' + entrada + '</td>' +
                '<td>' + simbolo + precio + '</td>' +
                '<td>' + cant + '</td>' +
                '<td>' + simbolo + precio * cant + '</td>' +
                '<td><button id="del" style="border-radius: 30px; width: 30px; height: 30px; padding: 0px;"><img src="img/icon/delete.png" width="100%"></button></td>' +
                '</tr>';
        $("#tabla1 tbody").append(nuevaFila);
    });

    $("#add3").click(function () {
        
        var servicio = document.getElementById("Servi").value;
        var servi = ""+servicio;
        var entrada = document.getElementById("entradaServi").value;
        var disponi  = document.getElementById("disponi").value;
        var precio = document.getElementById("id-tr").getElementsByTagName('td')[4].innerHTML;
        var simbolo = "";
        var cant = document.getElementById("cantServi").value;
        
        if (servicio == 1) {
            
        } else if (servicio == 2) {
            
        } else if (servicio == 3) {
            
        } else if (servicio == 4) {

        } else if (servicio == 5) {

        } else if (servicio == 6) {
            servi = "Alimentación";
            if (entrada == 1) {
                entrada = "Nacional";
            } else if (entrada == 2) {
                entrada = "Extrangero";
            }

            if (disponi == "d") {
                disponi = "Desayuno";
            } else if (disponi == "a") {
                disponi = "Almuerzo";
            } else if (disponi == "c") {
                disponi = "Cena";
            } else if (disponi == "dya") {
                disponi = "Desayuno y Almuerzo";
            } else if (disponi == "dyc") {
                disponi = "Desayuno y Cena";
            } else if (disponi == "ayc") {
                disponi = "Almuerzo y Cena";
            } else if (disponi == "dayc") {
                disponi = "Desayuno, Almuerzo y Cena";
            }
        } else if (servicio == 7) {

        }
        
       
        
        var nuevaFila = '<tr>' +
                '<td>' + servi + '</td>' +
                '<td>' + entrada + '</td>' +
                '<td>' + disponi + '</td>' +
                '<td>' + cant + '</td>' +
                '<td>' + precio + '</td>' +
                '<td><button  id="del3" style="border-radius: 30px; width: 30px; height: 30px; padding: 0px;"><img src="img/icon/delete.png" width="100%"></button></td>' +
                '</tr>';
        $("#tabla3 tbody").append(nuevaFila);
    });

    // evento para eliminar la fila
    $("#tabla1").on("click", "#del", function () {
        $(this).parents("tr").remove();
    });

    $("#tabla3").on("click", "#del3", function () {
        $(this).parents("tr").remove();
    });
});