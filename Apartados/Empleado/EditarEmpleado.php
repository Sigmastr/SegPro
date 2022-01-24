<div class="modal fade" id="crud<?php echo $filas['Rut_Empleado']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Edición Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="../../CRUD/UPDATE_empleado.php">
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Datos del Empleado</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombreEmpleado">Nombre del Empleado</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="NombreEmpleado" id="NombreEmpleado" placeholder="Ingrese nombre del empleado" value="<?php echo $filas['Nombre'] ?>">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputRut">Rut</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-address-card"></i>
                                </div>
                                <input type="text" class="form-control" name="RutEmpleado" id="RutEmpleado" placeholder="11111111-1" value="<?php echo $filas['Rut_Empleado'] ?>">
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
                            <label for="inputEmail">Email</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i>
                                </div>
                                <input type="email" class="form-control" name="Email" id="Email" placeholder="contacto@dominio.com" value="<?php echo $filas['Email'] ?>">
                            </div>

                        </div>


                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPass">Contraseña:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-mobile"></i>
                                </div>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="A-Z,0-9">
                            </div>

                        </div>
                    </div>
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #4437ff;">
                        Asignación de estado</h4>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombreEmpleado">Seleccionar Cuadrilla</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <?php
                                $var = $id_cuadrilla['id_personal'];
                                $sql1 = "SELECT * FROM empleado WHERE id_cuadrilla ='$var'";
                                $query = $conn->query($sql1);
                                $var = mysqli_fetch_array($query);
                                ?>
                                <select class="form-control" name="Cuadrilla" id="Cuadrilla">
                                    <?php
                                    $sql = ("SELECT * FROM cuadrilla");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['id_personal'] == $var['id_cuadrilla']) {
                                            echo '<option selected value="' . $valores['id_personal'] . '">' . $valores['Tipo_cuadrilla'] . '</option>';
                                        } else
                                            echo '<option  value="' . $valores['id_personal'] . '">' . $valores['Tipo_cuadrilla'] . '</option>';
                                    }
                                    ?>

                                </select>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCargo">Seleccione Cargo</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-address-card"></i>
                                </div>
                                <select class="form-control" name="cargo" id="cargo">
                                    <?php
                                    $sql = ("SELECT * FROM tipocargo");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="' . $valores['id_cargo'] . '">' . $valores['Nombre_Cargo'] . '</option>';
                                    }
                                    ?>

                                </select>
                            </div>

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