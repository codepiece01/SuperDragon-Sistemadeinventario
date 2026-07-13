

<?php $__env->startSection('content'); ?>

<h1>Listado de Categorías</h1>

<?php if(session('success')): ?>
<p class="mensaje-exito"><?php echo e(session('success')); ?></p>
<?php endif; ?>

<a href="<?php echo e(route('categorias.create')); ?>" class="btn-nueva">+ Nueva Categoría</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($categoria->IdCategoria); ?></td>
            <td><?php echo e($categoria->Descripcion); ?></td>
            <td>
                <a href="<?php echo e(route('categorias.show', $categoria->IdCategoria)); ?>" class="btn-editar">
                    Consultar
                </a>

                <a href="<?php echo e(route('categorias.edit', $categoria->IdCategoria)); ?>" class="btn-editar">
                    Editar
                </a>

                <form action="<?php echo e(route('categorias.destroy', $categoria->IdCategoria)); ?>"
                    method="POST"
                    class="form-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit"
                        class="btn-eliminar"
                        onclick="return confirm('¿Seguro que querés eliminar esta categoría?')">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\superdragon\resources\views/categorias/index.blade.php ENDPATH**/ ?>