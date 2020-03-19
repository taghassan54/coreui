<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PrivacyPolicy
 * @package App\Models
 * @version March 19, 2020, 3:32 am UTC
 *
 * @property string privacy_policy
 */
class PrivacyPolicy extends Model
{
    use SoftDeletes;

    public $table = 'privacy_policy';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'privacy_policy'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'privacy_policy' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'privacy_policy' => 'required'
    ];

    
}
