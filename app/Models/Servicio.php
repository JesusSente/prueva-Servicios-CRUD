<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Servicio
 * @package App\Models
 * @version June 2, 2024, 11:45 pm UTC
 *
 * @property \App\Models\Cliente $cliente
 * @property \App\Models\Equipo $equipo
 * @property \App\Models\Estado $estado
 * @property \App\Models\Tecnico $tecnico
 * @property \App\Models\Tiposervicio $tiposervicio
 * @property \Illuminate\Database\Eloquent\Collection $informeservicios
 * @property string $fecha_recibido
 * @property string $fecha_entrega
 * @property integer $cliente_id
 * @property integer $tecnico_id
 * @property integer $tiposervicio_id
 * @property integer $estado_id
 * @property integer $equipo_id
 * @property number $costo_servicio
 */
class Servicio extends Model
{
    protected $primaryKey = 'servicio_id';
    //use SoftDeletes;

    use HasFactory;

    public $table = 'servicios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'fecha_recibido',
        'fecha_entrega',
        'cliente_id',
        'tecnico_id',
        'tiposervicio_id',
        'estado_id',
        'equipo_id',
        'costo_servicio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'servicio_id' => 'integer',
        'fecha_recibido' => 'date',
        'fecha_entrega' => 'date',
        'cliente_id' => 'integer',
        'tecnico_id' => 'integer',
        'tiposervicio_id' => 'integer',
        'estado_id' => 'integer',
        'equipo_id' => 'integer',
        'costo_servicio' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha_recibido' => 'required',
        'fecha_entrega' => 'required',
        'cliente_id' => 'required',
        'tecnico_id' => 'required',
        'tiposervicio_id' => 'required',
        'estado_id' => 'required',
        'equipo_id' => 'required',
        'costo_servicio' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function equipo()
    {
        return $this->belongsTo(\App\Models\Equipo::class, 'equipo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function estado()
    {
        return $this->belongsTo(\App\Models\Estado::class, 'estado_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tecnico()
    {
        return $this->belongsTo(\App\Models\Tecnico::class, 'tecnico_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tiposervicio()
    {
        return $this->belongsTo(\App\Models\Tiposervicio::class, 'tiposervicio_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function informeservicios()
    {
        return $this->hasMany(\App\Models\Informeservicio::class, 'servicio_id');
    }
}
