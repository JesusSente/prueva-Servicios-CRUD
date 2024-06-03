<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TipoEquipo
 * @package App\Models
 * @version June 2, 2024, 11:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $marcas
 * @property string $descripcion
 */
class TipoEquipo extends Model
{
    protected $primaryKey = 'tipoequipo_id';
    //use SoftDeletes;

    use HasFactory;

    public $table = 'tipoequipo';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipoequipo_id' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function marcas()
    {
        return $this->belongsToMany(\App\Models\Marca::class, 'equipos');
    }
}
