<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FrequentlyAskedQuestion
 * @package App\Models
 * @version March 19, 2020, 3:35 am UTC
 *
 * @property string answer
 * @property string question
 */
class FrequentlyAskedQuestion extends Model
{
    use SoftDeletes;

    public $table = 'faq';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'answer',
        'question'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'answer' => 'string',
        'question' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'answer' => 'required',
        'question' => 'required'
    ];

    
}
