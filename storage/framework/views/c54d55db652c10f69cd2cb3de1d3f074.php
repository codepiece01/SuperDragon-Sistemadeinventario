

<?php $__env->startSection('content'); ?>

    <h1>Editar Usuario</h1>

    <div class="form-card">

        <?php if($errors->any()): ?>
            <div class="form-errores">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('usuarios.update', $usuario->IdUsuario)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-campo">
                <label for="NombreUsuario">Nombre de Usuario</label>
                <input type="text" name="NombreUsuario" id="NombreUsuario"
                       value="<?php echo e(old('NombreUsuario', $usuario->NombreUsuario)); ?>">
            </div>

            <div class="form-campo">
                <label for="Contrasena">Nueva Contraseña (dejar vacío para no cambiarla)</label>
                <input type="password" name="Contrasena" id="Contrasena">
            </div>

            <div class="form-campo">
                <label for="Rol">Rol</label>
                <select name="Rol" id="Rol">
                    <option value="Administrador" <?php echo e(old('Rol', $usuario->Rol) == 'Administrador' ? 'selected' : ''); ?>>Administrador</option>
                    <option value="Cajero" <?php echo e(old('Rol', $usuario->Rol) == 'Cajero' ? 'selected' : ''); ?>>Cajero</option>
                    <option value="Planta" <?php echo e(old('Rol', $usuario->Rol) == 'Planta' ? 'selected' : ''); ?>>Planta</option>
                </select>
            </div>

            <div class="form-acciones">
                <button type="submit" class="btn-nueva">Actualizar</button>
                <a href="<?php echo e(route('usuarios.index')); ?>">Cancelar</a>
            </div>
        </form>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\superdragon\resources\views/usuarios/edit.blade.php ENDPATH**/ ?>