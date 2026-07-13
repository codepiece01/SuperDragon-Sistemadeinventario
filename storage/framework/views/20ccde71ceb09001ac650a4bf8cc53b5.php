

<?php $__env->startSection('content'); ?>

    <h1>Listado de Subcategorías</h1>

    <?php if(session('success')): ?>
    <p class="mensaje-exito"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <a href="<?php echo e(route('subcategorias.create')); ?>" class="btn-nueva">+ Nueva Subcategoría</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $subcategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($subcategoria->IdSubCategoria); ?></td>
                <td><?php echo e($subcategoria->Descripcion); ?></td>
                <td><?php echo e($subcategoria->categoria->Descripcion ?? 'Sin categoría'); ?></td>
                <td>
                    <a href="<?php echo e(route('subcategorias.show', $subcategoria->IdSubCategoria)); ?>" class="btn-editar">
                        Consultar
                    </a>

                    <a href="<?php echo e(route('subcategorias.edit', $subcategoria->IdSubCategoria)); ?>" class="btn-editar">
                        Editar
                    </a>

                    <form action="<?php echo e(route('subcategorias.destroy', $subcategoria->IdSubCategoria)); ?>"
                        method="POST"
                        class="form-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit"
                            class="btn-eliminar"
                            onclick="return confirm('¿Seguro que querés eliminar esta subcategoría?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\superdragon\resources\views/subcategorias/index.blade.php ENDPATH**/ ?>