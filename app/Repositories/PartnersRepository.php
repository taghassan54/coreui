<?php

namespace App\Repositories;

use App\Models\Partners;
use App\Repositories\BaseRepository;

/**
 * Class PartnersRepository
 * @package App\Repositories
 * @version March 19, 2020, 2:06 am UTC
*/

class PartnersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'position',
        'aboute'
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
        return Partners::class;
    }
}
