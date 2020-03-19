<?php

namespace App\Repositories;

use App\Models\JoinAs;
use App\Repositories\BaseRepository;

/**
 * Class JoinAsRepository
 * @package App\Repositories
 * @version March 19, 2020, 2:36 am UTC
*/

class JoinAsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return JoinAs::class;
    }
}
