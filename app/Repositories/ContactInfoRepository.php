<?php

namespace App\Repositories;

use App\Models\ContactInfo;
use App\Repositories\BaseRepository;

/**
 * Class ContactInfoRepository
 * @package App\Repositories
 * @version March 19, 2020, 1:34 am UTC
*/

class ContactInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'value'
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
        return ContactInfo::class;
    }
}
