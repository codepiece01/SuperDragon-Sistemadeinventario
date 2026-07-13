<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nueva Subcategoría - SuperDragon</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>

<body>

    <h1>Nueva Subcategoría</h1>

    <?php if($errors->any()): ?>
    <div style="color: red;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <form action="<?php echo e(route('subcategorias.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label for="Descripcion">Descripción:</label>
        <input type="text" name="Descripcion" id="Descripcion" value="<?php echo e(old('Descripcion')); ?>">

        <br><br>

        <label for="IdCategoria">Categoría:</label>
        <select name="IdCategoria" id="IdCategoria">
            <option value="">-- Seleccione una categoría --</option>
            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($categoria->IdCategoria); ?>"
                <?php echo e(old('IdCategoria') == $categoria->IdCategoria ? 'selected' : ''); ?>>
                <?php echo e($categoria->Descripcion); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <br><br>

        <button type="submit" class="btn-nueva">Guardar</button>
        <a href="<?php echo e(route('subcategorias.index')); ?>">Cancelar</a>
    </form>

</body>

</html><?php /**PATH C:\laragon\www\superdragon\resources\views/subcategorias/create.blade.php ENDPATH**/ ?>