<?php include_once '../templates/header.php'; ?>

<h1 class="text-center">Formulario de Productos</h1>
<div class="row justify-content-center">
    <form action="/controladores/producto/guardar.php   " method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="prod_nombre">Nombre del Producto</label>
                <input type="text" name="prod_nombre" id="prod_nombre" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="prod_precio">Precio del Producto</label>
                <input type="number" name="prod_precio" id="prod_precio" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
        </div>
    </form>
</div>

<?php include_once '../templates/footer.php'; ?>