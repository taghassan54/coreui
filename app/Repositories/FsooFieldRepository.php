<?php

namespace App\Repositories;

use App\Models\FsooField;
use App\Repositories\BaseRepository;

/**
 * Class FsooFieldRepository
 * @package App\Repositories
 * @version March 19, 2020, 2:05 am UTC
*/

class FsooFieldRepository extends BaseRepository
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
        return FsooField::class;
    }
}
