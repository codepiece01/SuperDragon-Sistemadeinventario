<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Iniciar Sesión - SuperDragon</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="login-field">
                        <label for="NombreUsuario">Usuario</label>
                        <input type="text"
                            id="NombreUsuario"
                            name="NombreUsuario"
                            class="{{ $errors->has('NombreUsuario') ? 'is-invalid' : '' }}"
                            value="{{ old('NombreUsuario') }}"
                            required
                            autocomplete="username"
                            autofocus>

                        @error('NombreUsuario')
                        <div class="login-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="login-field">
                        <label for="password">Contraseña</label>
                        <input type="password"
                            id="password"
                            name="password"
                            class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                            required
                            autocomplete="current-password">

                        @error('password')
                        <div class="login-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="login-remember">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">Recordarme</label>
                    </div>

                    <button type="submit" class="login-btn">Iniciar Sesión</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>