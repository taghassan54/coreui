<?php

namespace App\Repositories;

use App\Models\BlogCategory;
use App\Repositories\BaseRepository;

/**
 * Class BlogCategoryRepository
 * @package App\Repositories
 * @version March 14, 2020, 9:23 am UTC
*/

class BlogCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
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
        return BlogCategory::class;
    }
}
