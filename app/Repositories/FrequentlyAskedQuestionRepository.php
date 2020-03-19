<?php

namespace App\Repositories;

use App\Models\FrequentlyAskedQuestion;
use App\Repositories\BaseRepository;

/**
 * Class FrequentlyAskedQuestionRepository
 * @package App\Repositories
 * @version March 19, 2020, 3:35 am UTC
*/

class FrequentlyAskedQuestionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'answer',
        'question'
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
        return FrequentlyAskedQuestion::class;
    }
}
