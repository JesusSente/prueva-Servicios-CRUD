<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Marca
 * @package App\Models
 * @version June 2, 2024, 11:44 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $tipoequipos
 * @property string $nombre_marca
 */
class Marca extends Model
{
    protected $primaryKey = 'marca_id';


    use HasFactory;

    public $table = 'marcas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';






    public $fillable = [
        'nombre_marca'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'marca_id' => 'integer',
        'nombre_marca' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_marca' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipoequipos()
    {
        return $this->belongsToMany(\App\Models\Tipoequipo::class, 'equipos');
    }
}
