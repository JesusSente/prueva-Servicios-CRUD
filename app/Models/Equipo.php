<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Equipo
 * @package App\Models
 * @version June 2, 2024, 11:42 pm UTC
 *
 * @property \App\Models\Marca $marca
 * @property \App\Models\Tipoequipo $tipoequipo
 * @property \Illuminate\Database\Eloquent\Collection $servicios
 * @property integer $tipoequipo_id
 * @property integer $marca_id
 */
class Equipo extends Model
{

    protected $primaryKey = 'equipo_id';

    use HasFactory;

    public $table = 'equipos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';






    public $fillable = [
        'tipoequipo_id',
        'marca_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'equipo_id' => 'integer',
        'tipoequipo_id' => 'integer',
        'marca_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipoequipo_id' => 'required',
        'marca_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marca()
    {
        return $this->belongsTo(\App\Models\Marca::class, 'marca_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoequipo()
    {
        return $this->belongsTo(\App\Models\Tipoequipo::class, 'tipoequipo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function servicios()
    {
        return $this->hasMany(\App\Models\Servicio::class, 'equipo_id');
    }
}
