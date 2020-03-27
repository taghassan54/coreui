<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LibraryType
 * @package App\Models
 * @version March 26, 2020, 2:02 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection libraries
 * @property string name
 */
class LibraryType extends Model
{
    use SoftDeletes;

    public $table = 'library_type';
    
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
    public function libraries()
    {
        return $this->hasMany(\App\Models\Library::class, 'library_type_id');
    }
}
