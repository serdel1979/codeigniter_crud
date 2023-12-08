<div class="container">

<?php if (!empty($datos)): ?>
    <div class="card" style="margin-top: 20px;">
        <div class="card-header">
            <h5>Listado de alumnos</h5>
        </div>
        <div class="card-body">
            <table class="table" style="margin-top: 20px;">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datos as $dato): ?>
                    <tr>
                        <th scope="row"> <?php echo $dato['id'] ?></th>
                        <td><?php echo $dato['nombre'] ?></td>
                        <td><?php echo $dato['apellido'] ?></td>
                        <td><?php echo $dato['telefono'] ?></td>
                        <td> 
                            <a href="" class="btn btn-primary">Editar</a>
                            <a href="" class="btn btn-danger">Eliminar</a>
                        </td>
                        <td><?php  ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <a href="<?= base_url('/inicio/add'); ?>" class="btn btn-success">Nuevo</a>

        </div>
    </div>
<?php else: ?>

    <div class="card" style="margin-top: 20px;">
        <div class="card-body">
            <h5 class="card-title">No hay alumnos...</h5>
        </div>
    </div>

<?php endif; ?>
</div>