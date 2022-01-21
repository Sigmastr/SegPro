"#update_user_modal<?php echo $filas['Rut']; ?>"

<div class="modal fade" id="#update_user_modal<?php echo $filas['Rut']; ?>" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Ficha Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="../../CRUD/Update_cliente.php">
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Datos del Cliente</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombreCliente">Nombre de Cliente</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="NombreCliente" id="NombreCliente" placeholder="Ingrese Cliente" value="<?php echo $filas['Nombre'] ?>">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputRut">Rut</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-address-card"></i>
                                </div>
                                <input type="text" class="form-control" name="RutCliente" id="RutCliente" placeholder="11111111-1" value="<?php echo $filas['Rut'] ?>">
                            </div>

                        </div>

                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputTlf">Telefono</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-mobile"></i>
                                </div>
                                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="911111111" value="<?php echo $filas['Telefono'] ?>">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputActividad">Actividad</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-briefcase"></i>
                                </div>
                                <input type="text" class="form-control" name="Actividad" id="Actividad" placeholder="Ingrese su actividad" value="<?php echo $filas['Actividad'] ?>">
                            </div>

                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputPais">País</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <input type="text" class="form-control" name="pais" id="pais" placeholder="Chile">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputRegion">Región</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <select class="form-control" name="region" id="region" value="<?php echo $filas['Region'] ?>">
                                    <?php
                                    $sql = ("SELECT * FROM region");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="' . $valores['Id_Region'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>

                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputCiudad">Ciudad</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-house-user"></i>
                                </div>
                                <select class="form-control" name="ciudad" id="ciudad">
                                    <!-- php aquí -->
                                    <?php
                                    $sql = ("SELECT * FROM comuna");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="' . $valores['id_comuna'] . '">' . $valores['Nombre_comuna'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDireccion">Dirección</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese la dirección">
                            </div>

                        </div>
                    </div>

                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #1eff56;">
                        Datos de Crédito y cobranza</h4>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="inputPlazoPago">PlazodePago</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <input type="text" class="form-control" name="PPago" id="PPago" placeholder="Ingrese el plazo de pago en días">
                            </div>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputContactoCobranza">Contacto Cobranza</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-phone"></i>
                                </div>
                                <input type="text" class="form-control" name="TelefonoCobranza" id="TelefonoCobranza" placeholder="Ingrese nombre del contacto">
                            </div>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail5">Correo Pago</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i>
                                </div>
                                <input type="email" class="form-control" name="CorreoPago" id="CorreoPago" placeholder="contacto@dominio.com">
                            </div>

                        </div>
                    </div>


                    <div class="form-row">

                        <div class="form-group col-md-6">

                            <label for="inputDireccionPago">Dirección Pago</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <input type="text" class="form-control" name="DirecPago" id="DirecPago" placeholder="Ingrese la dirección de pago">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLineaCredito">Línea de crédito</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-wallet"></i>
                                </div>
                                <input type="text" class="form-control" name="LineCredit" id="LineCredit" placeholder="Ingrese Línea de pago">
                            </div>

                        </div>
                    </div>

                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #8b11fd;">
                        Datos de Contacto</h4>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="InpuntRepre">Representante</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="NombreRepresentante" id="NombreRepresentante" placeholder="ingrese nombre de Representante">
                            </div>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Email</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i>
                                </div>
                                <input type="email" class="form-control" name="CorreoCliente" id="CorreoCliente" placeholder="contacto@dominio.com">
                            </div>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Correo Pago</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="email" class="form-control" id="CorreoPago" placeholder="contacto@dominio.com">
                            </div>

                        </div>
                    </div>
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #4437ff;">
                        Configuración Cliente</h4>
                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="inputEstadoCliente">Estado de Cliente en el sistema</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <select class="form-control" name="EstadoCliente" id="EstadoCliente">
                                    <?php
                                    $sql = ("SELECT * FROM estado_cliente_sistema");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="' . $valores['id_EstadoClienteSis'] . '">' . $valores['Estado_Cliente'] . '</option>';
                                    }
                                    ?>

                                </select>
                            </div>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Tipo de Cliente</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <select class="form-control" name="TipoCliente" id="TipoCliente">
                                    <option value="0">Seleccionar tipo de Cliente</option>
                                    <?php
                                    $sql = ("SELECT * FROM tipocliente");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="' . $valores['id_TipoCliente'] . '">' . $valores['Categoria_usuario'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputcontrato">Tipo de contrato</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-copy"></i>
                                </div>
                                <select class="form-control" name="contrato" id="contrato">
                                    <?php
                                    $sql = ("SELECT * FROM tipocontrato");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="' . $valores['id_tipoContrato '] . '">' . $valores['periodo_acceso'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form>


            </div>

        </div>
    </div>
</div>