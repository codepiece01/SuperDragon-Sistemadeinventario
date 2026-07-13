

<?php $__env->startSection('content'); ?>

    <h1>Nuevo Usuario</h1>

    <?php if($errors->any()): ?>
        <div style="color: red;">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('usuarios.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label for="NombreUsuario">Nombre de Usuario:</label>
        <input type="text" name="NombreUsuario" id="NombreUsuario" value="<?php echo e(old('NombreUsuario')); ?>">

        <br><br>

        <label for="Contrasena">Contraseña:</label>
        <input type="password" name="Contrasena" id="Contrasena">

        <br><br>

        <label for="Rol">Rol:</label>
        <select name="Rol" id="Rol">
            <option value="">-- Seleccione un rol --</option>
            <option value="Administrador" <?php echo e(old('Rol') == 'Administrador' ? 'selected' : ''); ?>>Administrador</option>
            <option value="Cajero" <?php echo e(old('Rol') == 'Cajero' ? 'selected' : ''); ?>>Cajero</option>
            <option value="Planta" <?php echo e(old('Rol') == 'Planta' ? 'selected' : ''); ?>>Planta</option>
        </select>

        <br><br>

        <button type="submit" class="btn-nueva">Guardar</button>
        <a href="<?php echo e(route('usuarios.index')); ?>">Cancelar</a>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\superdragon\resources\views/usuarios/create.blade.php ENDPATH**/ ?>