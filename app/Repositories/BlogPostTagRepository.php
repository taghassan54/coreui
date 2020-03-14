<?php

namespace App\Repositories;

use App\Models\BlogPostTag;
use App\Repositories\BaseRepository;

/**
 * Class BlogPostTagRepository
 * @package App\Repositories
 * @version March 14, 2020, 9:24 am UTC
*/

class BlogPostTagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tag_id',
        'post_id'
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
        return BlogPostTag::class;
    }
}
