<div class="cont1">
    <div class="cont2">
        <div class="pestañasR">
            <button class="infoReser">1. Información de Reserva</button>
            <button class="confirReser">2. Confirmar Reservación</button>
        </div>        
        <div class="cont3">
            <label>Datos de Reservación</label> 
            <div class="cont4">

                <form action="?c=reservacionUsuarioV1&a=Guardar" method="post">
                    <input name="numReservacion" type="hidden" value="<?php echo $re->numReservacion; ?>">
<?php echo '<script>alert("NumReserva vista ' . $re->numReservacion . '")</script> ';?>
                    <div class="reservDiv1">
                        <label>Parque Nacional: </label>
                        <select on style="margin-right: 80px;" onchange="cargarEstaciones(this.value);" name="selectParqueNacional" id="selectParqueNacional" class="selectParqueNacional">
                            <option value="0">Seleccione...</option>
                            <option value="pnsr">Parque Nacional Santa Rosa</option>
                            <option value="png">Parque Nacional Guanacaste</option>
                        </select>
                        <label style="margin-right: 10px;">Sector: </label>
                        <select id="selectSector" name="selectSector">
                            <option>Seleccione un Sector...</option>
                        </select>

                    </div>
                    <div class="reservDiv1">
                        <input checked="checked" type="radio" name="transporte2" value="Ingreso por hospedaje">Ingreso por hospedaje
                        <label style="margin-left: 250px; margin-right: 20px;">Fecha de Entrada</label>

                        <input id="fEntrada" onchange=""type="date">
                        <br>
                    </div>
                    <div class="reservDiv1">
                        <input type="radio" name="transporte2" value="Ingreso para acampar">Ingreso para acampar
                        <label style="margin-left: 250px; margin-right: 30px;">Cant Días </label>

                        <input name="dias" type="number">
                        <br>
                    </div>
                    <div class="reservDiv1">
                        <input type="radio" name="transporte2" value="Ingreso por día">Ingreso por día
                        <label style="margin-left: 280px;">Tipo de Visita</label>

                        <select style="margin-left: 20px;">
                            <option>--TIPO DE VISITA--</option>
                            <option>Turismo</option>
                            <option>Investigacion</option>
                        </select>
                    </div>

                    <div class="divTabla1">
<!--                    <script src="js/jquery-2.1.1.min.js"></script>-->

                        <table id="tabla1" class="tabla1" style="margin: auto; text-align: center;">
                            <tr class="encabezadoTabla" style="text-align: center;">

                                <th>Visitante</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                <th>

                                </th>
                            </tr>
                            <tr>
                                <td>

                                    <select id="entrada" onchange="precioPor(this.value)">
                                        <option value="1">Mujer(es)</option>
                                        <option value="2">Hombre(s)</option>
                                        <option value="3">Niña(s)</option>
                                        <option value="4">Niño(s)</option>
                                        <!--<option value="3">Estudiante(s)</option>-->
                                        <option value="5">Mujer(es) Extranjera(s)</option>                                    
                                        <option value="6">Hombre(s) Extranjero(s)</option>
                                        <option value="7">Niña(s) Extranjera(s)</option>
                                        <option value="8">Niño(s) Extranjero(s)</option>
                                    </select>
                                </td>
                                <td id="precioEntrada">₡1000</td>
                                <td>
                                    <select id="cant" onchange="calcSubtotal(this.value)">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td id="subTotalEntrada">₡1000</td>
                                <td>
                                    <button id="add" style="border-radius: 30px; width: 30px; height: 30px; padding: 0px;" >
                                        <img src="img/icon/add.png" width="100%"></button>
                                </td>
                            </tr>
                        </table>



                    </div>


                </form>





                


                
                <div class="parrafo1" style="color: red; font-size: 9px">
                    <p>*Varia de acuerdo al tipo de cambio del dolar estadounidense
                        **Primaria y secundaria en grupos organizados y cooordinados
                        con el programa de ecoturismo ecoturismo@acguanacaste.ac.cr o por fax al 2666-5020</p>
                </div>
                <h4 style="color: #68923d;"><u>Tabla de servicios con precios para nacionales y extranjeros</u></h4>

                <div class="divTabla2">
                    <table class="tabla2" style="margin: auto; width: 835px; text-align: center;">
                        <tr class="encabezadoTabla" style="text-align: center;">
                            <th style="height:40px;">Servicios</th>
                            <th>Disponibilidad</th>
                            <th>Nacionales Adulto/Niño</th>
                            <th>Extranjero Adulto/Niño</th>

                        </tr>
                        <tr>
                            <td>Cuartos (por día)</td>
                            <td>74 camas</td>
                            <td>₡12.000 / ₡10.000</td>
                            <td>$50 / $20</td>
                        </tr>
                        <tr>
                            <td>Laboratorio (por día)</td>
                            <td>1 </td>
                            <td>₡20.000 </td>
                            <td>$70</td>
                        </tr>
                        <tr>
                            <td>Lavanderia (por persona)</td>
                            <td>1 </td>
                            <td>₡2.000 / ₡1.000</td>
                            <td>$10 / $5</td>
                        </tr>
                        <tr>
                            <td>Senderos</td>
                            <td>2</td>
                            <td>₡1.500 / ₡1.000</td>
                            <td>$10 / $5</td>
                        </tr>
                        <tr>
                            <td>Charlas (por persona)</td>
                            <td>Si</td>
                            <td>₡1.500 / ₡1.000</td>
                            <td>$10 / $5</td>
                        </tr>
                        <tr>
                            <td>Alimentación (por persona)</td>
                            <td>
                                1.Desayuno<br>
                                2.Almuerzo<br>
                                3.Cena
                            </td>
                            <td>₡1.200 </td>
                            <td>$8</td>
                        </tr>
                        <tr>
                            <td>Aula Conferencia</td>
                            <td>1</td>
                            <td>₡20.000 </td>
                            <td>$70</td>
                        </tr>
                    </table>
                </div>

                <div class="parrafo2" style="color: red; font-size: 9px">
                    <p>*Se alquila de manera completa y únicamente para investigadores</p>
                    <p> **Se imparten diferentes charlas, que son escogidas acorde al tema que se solicite</p>
                    <p> ***La alientación se paga por adelantado por medio de transferencia bancaria,
                        anteriormente se enumera el tiempo de comida el cual debe indicar posteriormente
                        si asi lo solicita</p>
                </div>
                <!--------------------------------------------------tabla 3------------------------------------------------>
                <div class="divTabla3" id="divTabla3" style=" padding: 20px; background: red; "> 
<!--                    <table class="tabla3" id="tabla3" style="margin: auto; width: 100%; text-align: center;">
                        <tr class="encabezadoTabla" style="text-align: center;">
                            <th>Cant Mujeres Adultas</th>
                            <th>Cant Hombres Adultos</th>
                            <th>Cant Niñas</th>
                            <th>Cant Niños</th>
                            <th></th>
                            <th></th>
                            <th>Total</th>
                            <th>Mas</th>
                        </tr>
                        <tr id="id-tr">
                            <td>
                                <input type="number" style="width: 40px" >
                                
                                <select id="Servi" onchange="cualSelectServi(this.value)">
                                    <option value="0">Seleccione...</option>
                                    <option value="1">Hospedaje</option>
                                    <option value="2">Laboratorio</option>
                                    <option value="3">Lavanderia</option>
                                    <option value="4">Senderos</option>
                                    <option value="5">Charlas</option>
                                    <option value="6">Alimentación</option>
                                    <option value="7">Aula Conferencia</option>
                                </select>                                
                            </td>
                            <td>
                                <select id="entradaServi" onchange="cualSelectAdmisi(this.value)">
                                    <option>Selecione un Servicio...</option>
                                </select>
                            </td>

                            <td> 
                                <select id="disponi" onchange="calcuDisponi(this.value)">
                                    <option>Selecione el Tipo de Admision...</option>
                                </select>
                            </td>

                            <td>
                                <select id="cantServi"  onchange="calcSubtotalServi(this.value)">
                                    <option>Selecione...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </td>                            
                            <td id="totalParci">
                                0
                            </td>
                            <td></td>
                            <td>
                                <button id="add3" 
                                        style="border-radius: 30px; width: 30px; height: 30px; padding: 0px;" >
                                    <img src="img/icon/add.png" width="100%"></button>
                            </td>

                        </tr>
                    </table>-->





                </div>
                <div class="parrafo3" style="color: red; font-size: 9px">
                    <br><p>*Todos los campos con (*) son de caracter obligatorios.</p>


                </div>
                <div>
                    <a href="?c=reservacionUsuarioV1&aIndex">
                        <button class="btn azulO botonesReser">Cancelar</button>
                    </a>                                     
                    <a href="?c=reservacionUsuarioV2&aIndex">
                        <button class="btn azulO" >Siguiente</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
