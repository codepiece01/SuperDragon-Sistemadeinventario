<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Iniciar Sesión - SuperDragon</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>


<body class="login-body">

    <div class="login-wrapper">
        <div class="login-card">

            <div class="login-header">
                <div class="logo-icon"></div>
                <h1>SuperDragon</h1>
                <p>Sistema de Inventario y Ventas</p>
            </div>

            <div class="login-body-form">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="login-field">
                        <label for="NombreUsuario">Usuario</label>
                        <input type="text"
                            id="NombreUsuario"
                            name="NombreUsuario"
                            class="<?php echo e($errors->has('NombreUsuario') ? 'is-invalid' : ''); ?>"
                            value="<?php echo e(old('NombreUsuario')); ?>"
                            required
                            autocomplete="username"
                            autofocus>

                        <?php $__errorArgs = ['NombreUsuario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="login-error"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="login-field">
                        <label for="password">Contraseña</label>
                        <input type="password"
                            id="password"
                            name="password"
                            class="<?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>"
                            required
                            autocomplete="current-password">

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="login-error"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="login-remember">
                        <input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <label for="remember">Recordarme</label>
                    </div>

                    <button type="submit" class="login-btn">Iniciar Sesión</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html><?php /**PATH C:\laragon\www\superdragon\resources\views/auth/login.blade.php ENDPATH**/ ?>