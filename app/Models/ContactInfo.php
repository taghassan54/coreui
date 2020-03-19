<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ContactInfo
 * @package App\Models
 * @version March 19, 2020, 1:34 am UTC
 *
 * @property string type
 * @property string value
 */
class ContactInfo extends Model
{
    use SoftDeletes;

    public $table = 'contact_info';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required',
        'value' => 'required'
    ];

    
}
