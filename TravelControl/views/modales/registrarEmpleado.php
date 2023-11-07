 <!-- Modal -->
 <div class="modal fade" id="registrarEmpleado" tabindex="-1" aria-labelledby="registrarEmpleado" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="registrarEmpleado">Registrar Empleado</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post" action="../controller/insertarEmpleado.php">

          <div class="mb-3">
            <label for="empleado" class="form-label">Empleado</label>
            <input type="text" class="form-control" name="empleado" id="empleado" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="identificacion" class="form-label">Identificación</label>
            <input type="text" class="form-control" name="identificacion" id="identificacion" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="area" class="form-label">Area</label>
            <select class="form-select" aria-label="Default select example" name="area" id="area">
                <?php
                            
                    $sql= $conexion->query("select * from Area");
                    $areas = $sql->fetchAll(PDO::FETCH_OBJ);
                    #print_r($consultas);
                    foreach($areas as $area){
                ?>
                    <option value="<?php echo $area->id;?>"><?php echo $area->codigo;?></option>

                <?php }?> 
                
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Registrar</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>