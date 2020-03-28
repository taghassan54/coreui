<?php

namespace App\Repositories;

use App\Models\SpareTime;
use App\Repositories\BaseRepository;

/**
 * Class SpareTimeRepository
 * @package App\Repositories
 * @version March 28, 2020, 12:38 am UTC
*/

class SpareTimeRepository extends BaseRepository
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
        return SpareTime::class;
    }
}
