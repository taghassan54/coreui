<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
/**
 * Class OurTeam
 * @package App\Models
 * @version March 19, 2020, 3:23 am UTC
 *
 * @property string name
 * @property string position
 * @property string aboute
 */
class OurTeam extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;
    public $table = 'teames';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'position',
        'aboute'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'position' => 'string',
        'aboute' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'position' => 'required',
        'aboute' => 'required'
    ];


}
