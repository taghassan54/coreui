<?php

namespace App\Repositories;

use App\Models\OurTeam;
use App\Repositories\BaseRepository;

/**
 * Class OurTeamRepository
 * @package App\Repositories
 * @version March 19, 2020, 3:23 am UTC
*/

class OurTeamRepository extends BaseRepository
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
        return OurTeam::class;
    }
}
