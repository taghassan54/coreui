<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Footer
 * @package App\Models
 * @version March 14, 2020, 9:44 pm UTC
 *
 * @property string address
 * @property string email
 * @property string phone
 * @property string fax
 * @property string lang
 * @property string lat
 */
class Footer extends Model
{
    use SoftDeletes;

    public $table = 'footer';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'address',
        'email',
        'phone',
        'fax',
        'lang',
        'lat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'address' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'lang' => 'string',
        'lat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'address' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'fax' => 'required',
        'lang' => 'required',
        'lat' => 'required'
    ];

    
}
