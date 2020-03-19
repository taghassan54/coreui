<?php

namespace App\Repositories;

use App\Models\Countriy;
use App\Repositories\BaseRepository;

/**
 * Class CountriyRepository
 * @package App\Repositories
 * @version March 19, 2020, 1:32 am UTC
*/

class CountriyRepository extends BaseRepository
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
        return Countriy::class;
    }
}
