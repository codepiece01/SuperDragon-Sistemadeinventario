<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    // Nombre de la tabla en SQL Server
    protected $table = 'Usuarios';

    // Nombre de la columna PK
    protected $primaryKey = 'IdUsuario';

    // La tabla no tiene columnas created_at/updated_at
    public $timestamps = false;

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'NombreUsuario',
        'Contrasena',
        'Rol',
    ];

    // Por defecto, Laravel busca una columna llamada "password" para
    // verificar la contraseña al hacer login este método le indica a Laravel dónde buscarla.
    public function getAuthPassword()
    {
        return $this->Contrasena;
    }
}
