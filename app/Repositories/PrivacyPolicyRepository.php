<?php

namespace App\Repositories;

use App\Models\PrivacyPolicy;
use App\Repositories\BaseRepository;

/**
 * Class PrivacyPolicyRepository
 * @package App\Repositories
 * @version March 19, 2020, 3:32 am UTC
*/

class PrivacyPolicyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'privacy_policy'
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
        return PrivacyPolicy::class;
    }
}
