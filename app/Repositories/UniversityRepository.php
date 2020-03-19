<?php

namespace App\Repositories;

use App\Models\University;
use App\Repositories\BaseRepository;

/**
 * Class UniversityRepository
 * @package App\Repositories
 * @version March 19, 2020, 2:04 am UTC
*/

class UniversityRepository extends BaseRepository
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
        return University::class;
    }
}
