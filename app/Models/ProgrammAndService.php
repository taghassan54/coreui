<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Laravelista\Comments\Commentable;
/**
 * Class ProgrammAndService
 * @package App\Models
 * @version March 12, 2020, 11:57 pm UTC
 *
 * @property string title
 * @property string description
 */
class ProgrammAndService extends Model  implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;
    use Commentable;
    public $table = 'programms_and_services';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];


}
