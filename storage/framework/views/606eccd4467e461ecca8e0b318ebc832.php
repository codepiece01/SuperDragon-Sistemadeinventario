

<?php $__env->startSection('content'); ?>

    <h1>Detalle de Usuario</h1>

    <div class="detalle-card">
        <div class="detalle-item">
            <span class="detalle-label">ID</span>
            <span class="detalle-valor"><?php echo e($usuario->IdUsuario); ?></span>
        </div>
        <div class="detalle-item">
            <span class="detalle-label">Usuario</span>
            <span class="detalle-valor"><?php echo e($usuario->NombreUsuario); ?></span>
        </div>
        <div class="detalle-item">
            <span class="detalle-label">Rol</span>
            <span class="detalle-valor"><?php echo e($usuario->Rol); ?></span>
        </div>

        <div class="detalle-acciones">
            <a href="<?php echo e(route('usuarios.edit', $usuario->IdUsuario)); ?>" class="btn-editar">Editar</a>
            <a href="<?php echo e(route('usuarios.index')); ?>">Volver al listado</a>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\superdragon\resources\views/usuarios/show.blade.php ENDPATH**/ ?>