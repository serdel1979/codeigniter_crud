<div class="container">

    <?php if (session()->has('mensaje')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session('mensaje') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>


    <div class="card" style="margin-top: 20px;">

        <div class="card-header">
            <h5>Edita alumno</h5>
        </div>
        <div class="card-body">

        <form action="<?= base_url('inicio/update') ?>" method="post">


            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input  type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre..."
                value="<?= $alumno['nombre'] ?>">
                <input  type="hidden" class="form-control" id="id" name="id"
                value="<?= $alumno['id'] ?>">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input  type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido..."
                value="<?= $alumno['apellido'] ?>">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input  type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono..."
                value="<?= $alumno['telefono'] ?>">
            </div>

            <button type="submit" name="submit" class="btn btn-success" value="Guardar">Editar</button>
            <a href="<?= base_url('/inicio'); ?>" class="btn btn-primary">Volver</a>
        </form>
    </div>
</div>