<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // nombre de la tabla a como esta escrito en SQL Server
    protected $table = 'Categoria';        

// Eloquent por defecto espera una columna "id" como PK. La real es "IdCategoria".
    // Sin esto, find(), save() y delete() fallarían al armar el WHERE.

    
    protected $primaryKey = 'IdCategoria';  

// La tabla no tiene columnas created_at/updated_at, así que se desactiva
    // esa función automática de Eloquent para evitar errores al guardar.

    public $timestamps = false;  
    
    
     // campos que se pueden asignar en create()/update()

    protected $fillable = [
        'Descripcion',                      // campos que se pueden asignar en create()/update()
    ];
}