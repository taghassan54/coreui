<?php

namespace App\Repositories;

use App\Models\LibraryType;
use App\Repositories\BaseRepository;

/**
 * Class LibraryTypeRepository
 * @package App\Repositories
 * @version March 26, 2020, 2:02 am UTC
*/

class LibraryTypeRepository extends BaseRepository
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
        return LibraryType::class;
    }
}
