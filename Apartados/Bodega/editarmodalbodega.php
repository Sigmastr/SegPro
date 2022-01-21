<div class="modal fade" id="update_bodega<?php echo $filas['Codigo_bodega']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Agregar Bodega</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="../../CRUD/Update_Bodega.php">
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Datos de Bodega</h4>
                    <div class="form-row">
                        <?php
                        $var = $filas['Nombre_Bodega'];
                        $sql = ("SELECT * FROM bodega where Nombre_Bodega='$var'");
                        $query = $conn->query($sql);
                        $var = mysqli_fetch_array($query);
                        ?>
                        <div class="form-group col-md-6">
                            <label for="inputNombreEmpleado">Nombre de Bodega</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="NombreBodega" id="NombreBodega" placeholder="Ingrese nombre de la bodega" value=<?php echo $var['Nombre_Bodega'] ?>>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDireccion">Dirección</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <input type="text" class="form-control" name="direccion" id="direccion" value=<?php echo $filas['Direccion'] ?> placeholder="Ingrese la dirección">
                            </div>

                        </div>


                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail5">Correo</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i>
                                </div>
                                <input type="email" class="form-control" name="Correo" id="Correo" value=<?php echo $filas['Email'] ?> placeholder="bodega@dominio.com">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputRegion">Región</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <select class="form-control" name="region" id="region" value=<?php echo $filas['id_Region'] ?>>
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
                                <?php
                                $var = $filas['Rut_Encargado'];
                                $sql = ("SELECT Comuna_id FROM bodega where Rut_Encargado ='$var'");
                                $query = $conn->query($sql);
                                $var = mysqli_fetch_array($query);
                                ?>
                                <select class="form-control" name="ciudad" id="ciudad" value=<?php echo $filas['Comuna_id'] ?>>
                                    <!-- php aquí -->
                                    <?php
                                    $sql = ("SELECT * FROM comuna");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['id_comuna'] == $var['Comuna_id']) {
                                            // El selected sirve para mostrar el valor recibido de la consulta.
                                            echo '<option selected value="' . $valores['id_comuna'] . '">' . $valores['Nombre_comuna'] . '</option>';
                                        } else
                                            echo '<option value="' . $valores['id_comuna'] . '">' . $valores['Nombre_comuna'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                    </div>

                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Datos de Contacto</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombreEmpleado">Seleccione jefe de bodega</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <select class="form-control" name="encargado" id="encargado" value=<?php echo $filas['Rut_Encargado'] ?>>
                                    <!-- php aquí -->
                                    <?php
                                    //colocar el where cargo = Jefe Bodega
                                    $sql = ("SELECT * FROM empleado");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="' . $valores['Rut_Empleado'] . '">' . $valores['Nombre'] . '</option>';
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