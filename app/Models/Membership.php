<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Membership
 * @package App\Models
 * @version March 19, 2020, 2:43 pm UTC
 *
 * @property \App\Models\AgeRange ageRange
 * @property \App\Models\City city
 * @property \App\Models\Country country
 * @property \App\Models\Nationality nationality
 * @property \App\Models\Specialization specialization
 * @property \App\Models\University university
 * @property \Illuminate\Database\Eloquent\Collection contactInfos
 * @property \Illuminate\Database\Eloquent\Collection experiences
 * @property integer country_id
 * @property string name
 * @property string gender
 * @property integer age_range_id
 * @property integer nationality_id
 * @property integer city_id
 * @property string district
 * @property string block
 * @property string graduation_date
 * @property integer specialization_id
 * @property integer university_id
 * @property string comments
 * @property string Services_you_like_to_participate
 * @property string other_memberships
 */
class Membership extends Model
{
    use SoftDeletes;

    public $table = 'memberships';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'country_id',
        'name',
        'gender',
        'age_range_id',
        'nationality_id',
        'city_id',
        'district',
        'block',
        'graduation_date',
        'specialization_id',
        'university_id',
        'comments',
        'Services_you_like_to_participate',
        'other_memberships'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country_id' => 'integer',
        'name' => 'string',
        'gender' => 'string',
        'age_range_id' => 'integer',
        'nationality_id' => 'integer',
        'city_id' => 'integer',
        'district' => 'string',
        'block' => 'string',
        'graduation_date' => 'date',
        'specialization_id' => 'integer',
        'university_id' => 'integer',
        'comments' => 'string',
        'Services_you_like_to_participate' => 'string',
        'other_memberships' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'country_id' => 'required',
        'name' => 'required',
        'gender' => 'required',
        'age_range_id' => 'required',
        'nationality_id' => 'required',
        'city_id' => 'required',
        'district' => 'required',
        'block' => 'required',
        'graduation_date' => 'required',
        'specialization_id' => 'required',
        'university_id' => 'required',
        'comments' => 'required',
        'other_memberships' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ageRange()
    {
        return $this->belongsTo(\App\Models\AgeRange::class, 'age_range_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function city()
    {
        return $this->belongsTo(\App\Models\City::class, 'city_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class, 'country_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function nationality()
    {
        return $this->belongsTo(\App\Models\Nationality::class, 'nationality_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function specialization()
    {
        return $this->belongsTo(\App\Models\Specialization::class, 'specialization_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function university()
    {
        return $this->belongsTo(\App\Models\University::class, 'university_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function contactInfos()
    {
        return $this->hasMany(\App\Models\ContactInfo::class, 'member_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function experiences()
    {
        return $this->hasMany(\App\Models\Experience::class, 'member_id');
    }
}
