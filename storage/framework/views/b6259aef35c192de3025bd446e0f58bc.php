<?php $__env->startSection('content'); ?>

    <h1 class="dashboard-saludo">Hola, <?php echo e(Auth::user()->NombreUsuario); ?> </h1>
    <p class="dashboard-subtexto">Bienvenido al panel de control de SuperDragon.</p>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon"></div>
            <div class="stat-numero"><?php echo e($totalCategorias); ?></div>
            <div class="stat-label">Categorías registradas</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon"></div>
            <div class="stat-numero"><?php echo e($totalSubcategorias); ?></div>
            <div class="stat-label">Subcategorías registradas</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon"></div>
            <div class="stat-numero"><?php echo e($totalUsuarios); ?></div>
            <div class="stat-label">Usuarios del sistema</div>
        </div>
    </div>

    <p>Seleccioná un módulo desde el menú de la izquierda para comenzar a trabajar.</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\superdragon\resources\views/home.blade.php ENDPATH**/ ?>