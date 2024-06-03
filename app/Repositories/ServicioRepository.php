<?php

namespace App\Repositories;

use App\Models\Servicio;
use App\Repositories\BaseRepository;

/**
 * Class ServicioRepository
 * @package App\Repositories
 * @version June 2, 2024, 11:45 pm UTC
*/

class ServicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Servicio::class;
    }
}
