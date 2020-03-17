<?php

namespace App\Repositories;

use App\Models\Footer;
use App\Repositories\BaseRepository;

/**
 * Class FooterRepository
 * @package App\Repositories
 * @version March 14, 2020, 9:44 pm UTC
*/

class FooterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'address',
        'email',
        'phone',
        'fax',
        'lang',
        'lat'
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
        return Footer::class;
    }
}
