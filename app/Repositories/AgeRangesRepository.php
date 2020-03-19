<?php

namespace App\Repositories;

use App\Models\AgeRanges;
use App\Repositories\BaseRepository;

/**
 * Class AgeRangesRepository
 * @package App\Repositories
 * @version March 19, 2020, 2:00 am UTC
*/

class AgeRangesRepository extends BaseRepository
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
        return AgeRanges::class;
    }
}
