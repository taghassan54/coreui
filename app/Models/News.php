<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class News
 * @package App\Models
 * @version March 19, 2020, 2:50 pm UTC
 *
 * @property string title
 * @property string text
 * @property string|\Carbon\Carbon date
 */
class News extends Model
{
    use SoftDeletes;

    public $table = 'news';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'text',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'text' => 'string',
        'date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'text' => 'required',
        'date' => 'required'
    ];

    
}
