<?php

namespace App\Repositories;

use App\Models\ProgrammAndService;
use App\Repositories\BaseRepository;

/**
 * Class ProgrammAndServiceRepository
 * @package App\Repositories
 * @version March 12, 2020, 11:57 pm UTC
*/

class ProgrammAndServiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description'
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
        return ProgrammAndService::class;
    }
}
