<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Categoría - SuperDragon</title>

    <!-- Se enlaza el CSS general del sistema -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>

<body>

    <h1>Editar Categoría</h1>

    <!-- Si la validación falla (por ejemplo, si el campo vino vacío),
         Laravel guarda los mensajes de error automáticamente -->
    <?php if($errors->any()): ?>
    <div style="color: red;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <!-- Este formulario manda los datos al método update() del controlador.
         La acción apunta a la ruta con el ID de la categoría que se está editando -->
    <form action="<?php echo e(route('categorias.update', $categoria->IdCategoria)); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <!-- Laravel por defecto solo entiende GET y POST en formularios HTML,
             así que esta línea le avisa que este envío debe tratarse como PUT
             (que es el verbo que usa la ruta de "update") -->
        <?php echo method_field('PUT'); ?>

        <label for="Descripcion">Descripción:</label>
        <input type="text"
            name="Descripcion"
            id="Descripcion"
            value="<?php echo e(old('Descripcion', $categoria->Descripcion)); ?>">

        <br><br>

        <button type="submit" class="btn-nueva">Actualizar</button>
        <a href="<?php echo e(route('categorias.index')); ?>">Cancelar</a>
    </form>

</body>

</html><?php /**PATH C:\laragon\www\superdragon\resources\views/categorias/edit.blade.php ENDPATH**/ ?>