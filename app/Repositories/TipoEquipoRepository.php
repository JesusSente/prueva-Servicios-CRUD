<?php

namespace App\Repositories;

use App\Models\TipoEquipo;
use App\Repositories\BaseRepository;

/**
 * Class TipoEquipoRepository
 * @package App\Repositories
 * @version June 2, 2024, 11:46 pm UTC
*/

class TipoEquipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
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
        return TipoEquipo::class;
    }
}
