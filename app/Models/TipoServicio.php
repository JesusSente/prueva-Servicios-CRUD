<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TipoServicio
 * @package App\Models
 * @version June 2, 2024, 11:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $servicios
 * @property string $descripcion
 */
class TipoServicio extends Model
{
    protected $primaryKey = 'tiposervicio_id';
    //use SoftDeletes;

    use HasFactory;

    public $table = 'tiposervicio';
    
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
        'tiposervicio_id' => 'integer',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function servicios()
    {
        return $this->hasMany(\App\Models\Servicio::class, 'tiposervicio_id');
    }
}
