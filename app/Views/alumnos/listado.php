<div class="container">

<?php if (!empty($datos)): ?>
    <div class="card" style="margin-top: 20px;">
        <div class="card-body">
            <h5 class="card-title">Listado de alumnos</h5>
            <table class="table" style="margin-top: 20px;">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datos as $dato): ?>
                    <tr>
                        <th scope="row"> <?php echo $dato['id'] ?></th>
                        <td><?php echo $dato['nombre'] ?></td>
                        <td><?php echo $dato['apellido'] ?></td>
                        <td><?php echo $dato['telefono'] ?></td>
                        <td><?php  ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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