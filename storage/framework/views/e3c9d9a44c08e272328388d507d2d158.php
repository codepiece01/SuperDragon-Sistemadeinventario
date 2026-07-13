

<?php $__env->startSection('content'); ?>

    <h1>Editar Subcategoría</h1>

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

        <form action="<?php echo e(route('subcategorias.update', $subcategoria->IdSubCategoria)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-campo">
                <label for="Descripcion">Descripción</label>
                <input type="text" name="Descripcion" id="Descripcion"
                       value="<?php echo e(old('Descripcion', $subcategoria->Descripcion)); ?>">
            </div>

            <div class="form-campo">
                <label for="IdCategoria">Categoría</label>
                <select name="IdCategoria" id="IdCategoria">
                    <option value="">-- Seleccione una categoría --</option>
                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($categoria->IdCategoria); ?>"
                            <?php echo e(old('IdCategoria', $subcategoria->IdCategoria) == $categoria->IdCategoria ? 'selected' : ''); ?>>
                            <?php echo e($categoria->Descripcion); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-acciones">
                <button type="submit" class="btn-nueva">Actualizar</button>
                <a href="<?php echo e(route('subcategorias.index')); ?>">Cancelar</a>
            </div>
        </form>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\superdragon\resources\views/subcategorias/edit.blade.php ENDPATH**/ ?>