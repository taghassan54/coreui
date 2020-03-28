<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Experienc
 * @package App\Models
 * @version March 28, 2020, 1:44 am UTC
 *
 * @property \App\Models\Membership member
 * @property string job_title
 * @property string from
 * @property string to
 * @property string workplace
 * @property string email
 * @property string phone
 * @property integer member_id
 */
class Experienc extends Model
{
    use SoftDeletes;

    public $table = 'experience';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'job_title',
        'from',
        'to',
        'workplace',
        'email',
        'phone',
        'member_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'job_title' => 'string',
        'from' => 'date',
        'to' => 'date',
        'workplace' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'member_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'job_title' => 'required',
        'from' => 'required',
        'workplace' => 'required',
        'email' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function member()
    {
        return $this->belongsTo(\App\Models\Membership::class, 'member_id');
    }
}
