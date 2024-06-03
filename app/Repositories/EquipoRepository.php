<?php

namespace App\Repositories;

use App\Models\Equipo;
use App\Repositories\BaseRepository;

/**
 * Class EquipoRepository
 * @package App\Repositories
 * @version June 2, 2024, 11:42 pm UTC
*/

class EquipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoequipo_id',
        'marca_id'
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
        return Equipo::class;
    }
    
}
