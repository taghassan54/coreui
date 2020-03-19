<?php

namespace App\Repositories;

use App\Models\Membership;
use App\Repositories\BaseRepository;

/**
 * Class MembershipRepository
 * @package App\Repositories
 * @version March 19, 2020, 2:43 pm UTC
*/

class MembershipRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'country_id',
        'name',
        'gender',
        'age_range_id',
        'nationality_id',
        'city_id',
        'district',
        'block',
        'graduation_date',
        'specialization_id',
        'university_id',
        'comments',
        'Services_you_like_to_participate',
        'other_memberships'
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
        return Membership::class;
    }
}
