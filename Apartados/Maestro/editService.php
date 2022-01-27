<div class="modal fade" id="update_service<?php echo $filas['id_tipoIns']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Agregar Bodega</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="../../CRUD/UPDATE_TipoServicio.php">
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Nombre del Servicio</h4>
                    <div class="form-row">
                        <?php
                        $var = $filas['Tipo'];
                        $sql = ("SELECT * FROM tipoinstalacion where Tipo='$var'");
                        $query = $conn->query($sql);
                        $var = mysqli_fetch_array($query);
                        ?>

                        <div class="form-group col-md-6">
                            <label for="inputDireccion">Tipo de servicio</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <input type="text" class="form-control" name="tipo" id="tipo" value=<?php echo $filas['Tipo'] ?> placeholder="Mall, edificio, bodega,etc">
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