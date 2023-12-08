<div class="container">

    <div class="card" style="margin-top: 20px;">

        <div class="card-header">
            <h5>Agregar nuevo</h5>
        </div>
        <div class="card-body">

        <form action="/codeigniter_crud/public/inicio/add" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre...">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input required type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido...">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input required type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono...">
            </div>

            <button type="submit" name="submit" class="btn btn-success" value="Guardar">Guardar</button>
            <a href="<?= base_url('/inicio'); ?>" class="btn btn-primary">Volver</a>
        </form>
    </div>
</div>