<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class InformeServicio
 * @package App\Models
 * @version June 2, 2024, 11:43 pm UTC
 *
 * @property \App\Models\Servicio $servicio
 * @property string $diagnostico
 * @property string $solucion
 * @property integer $servicio_id
 */
class InformeServicio extends Model
{
    protected $primaryKey = 'informeservicio_id';
    //use SoftDeletes;

    use HasFactory;

    public $table = 'informeservicio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'diagnostico',
        'solucion',
        'servicio_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'informeservicio_id' => 'integer',
        'diagnostico' => 'string',
        'solucion' => 'string',
        'servicio_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'diagnostico' => 'required|string|max:255',
        'solucion' => 'required|string|max:255',
        'servicio_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function servicio()
    {
        return $this->belongsTo(\App\Models\Servicio::class, 'servicio_id');
    }
}
