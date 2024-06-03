<?php

namespace App\Repositories;

use App\Models\InformeServicio;
use App\Repositories\BaseRepository;

/**
 * Class InformeServicioRepository
 * @package App\Repositories
 * @version June 2, 2024, 11:43 pm UTC
*/

class InformeServicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'diagnostico',
        'solucion',
        'servicio_id'
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
        return InformeServicio::class;
    }
}
