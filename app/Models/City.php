<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class City
 * @package App\Models
 * @version March 19, 2020, 1:45 am UTC
 *
 * @property \App\Models\Country country
 * @property \Illuminate\Database\Eloquent\Collection memberships
 * @property string name
 * @property integer country_id
 */
class City extends Model
{
    use SoftDeletes;

    public $table = 'cities';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'country_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'country_id' => 'integer'
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function country()
    {
        return $this->belongsTo(\App\Models\Countriy::class, 'country_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function memberships()
    {
        return $this->hasMany(\App\Models\Membership::class, 'city_id');
    }

    public function getCountryNameAttribute(){
        // return $this->country;
        return $this->country?$this->country->name:'';
    }
}
