# SuperDragon - Sistema de Gestión de Inventario y Ventas

Proyecto Final - Programación IV
Michael Cubillo Arguedas

## Descripción

Sistema web para la gestión de inventario y ventas de un supermercado, desarrollado con Laravel (PHP) y SQL Server como motor de base de datos.

## Requisitos

- PHP 8.1 o superior
- Composer
- Laragon o XAMPP
- SQL Server (base de datos `DB_INVENTARIO`)
- Extensiones de PHP: `sqlsrv` y `pdo_sqlsrv`

## Instalación

1. Cloná o descomprimí este proyecto en tu carpeta de proyectos (`www` en Laragon o `htdocs` en XAMPP).

2. Abrí una terminal (Laragon o XAMPP) dentro de la carpeta del proyecto.

3. Instalá las dependencias con Composer:

   ```
   composer install
   ```

   Este comando genera la carpeta `vendor/` con todas las dependencias del proyecto. Esa carpeta **no se incluye** en la entrega (ni en el ZIP ni en el repositorio) porque pesa demasiado y se puede regenerar fácilmente con este comando.

4. Copiá el archivo de ejemplo de variables de entorno:

   ```
   copy .env.example .env
   ```

5. Editá el archivo `.env` y configurá la conexión a SQL Server:

   ```
   DB_CONNECTION=sqlsrv
   DB_HOST=127.0.0.1
   DB_PORT=1433
   DB_DATABASE=DB_INVENTARIO
   DB_USERNAME=sa
   DB_PASSWORD=tu_contraseña
   ```

6. Generá la clave de la aplicación (necesaria para que Laravel funcione correctamente):

   ```
   php artisan key:generate
   ```

7. Levantá el servidor de desarrollo:

   ```
   php artisan serve
   ```

8. Abrí el navegador en:

   ```
   http://127.0.0.1:8000
   ```

## Tecnologías utilizadas

- Laravel (framework PHP)
- PHP
- SQL Server
- Visual Studio Code

## Autor

Michael Cubillo Arguedas
