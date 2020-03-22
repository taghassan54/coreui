<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * Class Slider
 * @package App\Models
 * @version March 14, 2020, 7:52 am UTC
 *
 * @property string title
 * @property string text
 * @property boolean type
 */
class Slider extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;
    public $table = 'sliders';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'title',
        'text',
        'type',
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
        'type' => 'boolean',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function getSliderTypeAttribute()
    {
       return $this->type == 1 ? "bottom slider" : "top slider";
    }
}
