

<?php $__env->startSection('content'); ?>

    <h1>Detalle de Subcategoría</h1>

    <div class="detalle-card">
        <div class="detalle-item">
            <span class="detalle-label">ID</span>
            <span class="detalle-valor"><?php echo e($subcategoria->IdSubCategoria); ?></span>
        </div>
        <div class="detalle-item">
            <span class="detalle-label">Descripción</span>
            <span class="detalle-valor"><?php echo e($subcategoria->Descripcion); ?></span>
        </div>
        <div class="detalle-item">
            <span class="detalle-label">Categoría</span>
            <span class="detalle-valor"><?php echo e($subcategoria->categoria->Descripcion ?? 'Sin categoría'); ?></span>
        </div>

        <div class="detalle-acciones">
            <a href="<?php echo e(route('subcategorias.edit', $subcategoria->IdSubCategoria)); ?>" class="btn-editar">Editar</a>
            <a href="<?php echo e(route('subcategorias.index')); ?>">Volver al listado</a>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\superdragon\resources\views/subcategorias/show.blade.php ENDPATH**/ ?>