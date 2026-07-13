

<?php $__env->startSection('content'); ?>

    <h1>Listado de Usuarios</h1>

    <?php if(session('success')): ?>
    <p class="mensaje-exito"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <a href="<?php echo e(route('usuarios.create')); ?>" class="btn-nueva">+ Nuevo Usuario</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($usuario->IdUsuario); ?></td>
                <td><?php echo e($usuario->NombreUsuario); ?></td>
                <td><?php echo e($usuario->Rol); ?></td>
                <td>
                    <a href="<?php echo e(route('usuarios.show', $usuario->IdUsuario)); ?>" class="btn-editar">
                        Consultar
                    </a>

                    <a href="<?php echo e(route('usuarios.edit', $usuario->IdUsuario)); ?>" class="btn-editar">
                        Editar
                    </a>

                    <form action="<?php echo e(route('usuarios.destroy', $usuario->IdUsuario)); ?>"
                        method="POST"
                        class="form-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit"
                            class="btn-eliminar"
                            onclick="return confirm('¿Seguro que querés eliminar este usuario?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\superdragon\resources\views/usuarios/index.blade.php ENDPATH**/ ?>