<div class="modal fade" id="update_category<?php echo $filas['id_Categoria']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Agregar Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="#">
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Nombre de la Categoría</h4>
                    <div class="form-row">
                        <?php
                        $var = $filas['id_Categoria'];
                        $sql = ("SELECT * FROM categoria where id_Categoria ='$var'");
                        $query = $conn->query($sql);
                        $var = mysqli_fetch_array($query);
                        ?>

                        <div class="form-group col-md-6">
                            <label for="InputCategoria">Nombre de la categoría</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <input type="text" class="form-control" name="tipo" id="tipo" value=<?php echo $filas['Nombre'] ?> placeholder="ingrese el nombre de la categoría">
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