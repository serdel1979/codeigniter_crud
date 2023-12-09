<div class="container">
<?php if (session()->has('mensaje')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session('mensaje') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

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

                        <div class="btn-group">
                            <a style="margin-right: 5px; border-top-right-radius: 0; border-bottom-right-radius: 0;" href="<?= base_url('inicio/edit/'.$dato['id']) ?>" class="btn btn-primary">Editar</a>
                            <form action="<?= base_url('inicio/delet/'.$dato['id']) ?>" method="post">
                                <button style="margin-left: 5px; border-top-left-radius: 0; border-bottom-left-radius: 0;" type="submit" name="submit" class="btn btn-success" value="Guardar">Eliminar</button>
                            </form>
                        </div>

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
            <a href="<?= base_url('/inicio/add'); ?>" class="btn btn-success">Nuevo</a>
        </div>

    </div>

<?php endif; ?>

</div>