<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class University
 * @package App\Models
 * @version March 19, 2020, 2:04 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection memberships
 * @property string name
 */
class University extends Model
{
    use SoftDeletes;

    public $table = 'universities';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function memberships()
    {
        return $this->hasMany(\App\Models\Membership::class, 'university_id');
    }
}
