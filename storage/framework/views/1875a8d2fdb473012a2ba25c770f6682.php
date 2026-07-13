<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Detalle de Categoría - SuperDragon</title>

    <!-- Se enlaza el CSS general del sistema -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>

<body>

    <h1>Detalle de Categoría</h1>

    <p><strong>ID:</strong> <?php echo e($categoria->IdCategoria); ?></p>
    <p><strong>Descripción:</strong> <?php echo e($categoria->Descripcion); ?></p>

    <br>

    <a href="<?php echo e(route('categorias.edit', $categoria->IdCategoria)); ?>" class="btn-editar">Editar</a>
    <a href="<?php echo e(route('categorias.index')); ?>">Volver al listado</a>

</body>

</html><?php /**PATH C:\laragon\www\superdragon\resources\views/categorias/show.blade.php ENDPATH**/ ?>