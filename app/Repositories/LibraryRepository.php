<?php

namespace App\Repositories;

use App\Models\Library;
use App\Repositories\BaseRepository;

/**
 * Class LibraryRepository
 * @package App\Repositories
 * @version March 26, 2020, 2:03 am UTC
*/

class LibraryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'library_type_id'
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
        return Library::class;
    }
}
