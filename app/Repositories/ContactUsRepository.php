<?php

namespace App\Repositories;

use App\Models\ContactUs;
use App\Repositories\BaseRepository;

/**
 * Class ContactUsRepository
 * @package App\Repositories
 * @version March 13, 2020, 2:20 am UTC
*/

class ContactUsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'message'
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
        return ContactUs::class;
    }
}
