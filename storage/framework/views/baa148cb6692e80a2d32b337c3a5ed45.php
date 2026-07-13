<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nueva Categoría - SuperDragon</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>

<body>

    <h1>Nueva Categoría</h1>

    <!-- Si la validación del controlador falla (por ejemplo, si el campo
         vino vacío), Laravel guarda los mensajes de error automáticamente -->
    <?php if($errors->any()): ?>
    <div style="color: red;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <!-- Este formulario manda los datos al método store() del controlador,
         que es el que efectivamente guarda la categoría nueva en la base de datos -->
    <form action="<?php echo e(route('categorias.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label for="Descripcion">Descripción:</label>
        <input type="text" name="Descripcion" id="Descripcion" value="<?php echo e(old('Descripcion')); ?>">

        <br><br>

        <button type="submit" class="btn-nueva">Guardar</button>
        <a href="<?php echo e(route('categorias.index')); ?>">Cancelar</a>
    </form>

</body>

</html><?php /**PATH C:\laragon\www\superdragon\resources\views/categorias/create.blade.php ENDPATH**/ ?>