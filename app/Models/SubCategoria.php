<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    // Nombre real de la tabla en SQL Server 
    protected $table = 'SubCategoria';

    // Nombre real de la columna PK 
    protected $primaryKey = 'IdSubCategoria';

    // La tabla no tiene columnas created_at/updated_at
    public $timestamps = false;

    // Campos permitidos para asignación masiva (create/update con array)
    protected $fillable = [
        'Descripcion',
        'IdCategoria',
    ];

    // Relación: cada subcategoría pertenece a una categoría.
    // Esto permite acceder, por ejemplo, a subcategoria-categoria-Descripcion
    // para saber el nombre de la categoría padre sin escribir un JOIN manual.
    //belongsTo significa "esta tabla le pertenece a otra" (SubCategoria pertenece a Categoria)
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'IdCategoria', 'IdCategoria');
    }
}
