<?php

namespace App\Repositories;

use App\Models\Tecnico;
use App\Repositories\BaseRepository;

/**
 * Class TecnicoRepository
 * @package App\Repositories
 * @version June 2, 2024, 11:45 pm UTC
*/

class TecnicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'direccion',
        'telefono'
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
        return Tecnico::class;
    }
}
