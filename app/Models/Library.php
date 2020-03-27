<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
/**
 * Class Library
 * @package App\Models
 * @version March 26, 2020, 2:03 am UTC
 *
 * @property \App\Models\LibraryType libraryType
 * @property string name
 * @property integer library_type_id
 */
class Library extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;
    public $table = 'libraries';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'library_type_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'library_type_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'library_type_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function libraryType()
    {
        return $this->belongsTo(\App\Models\LibraryType::class, 'library_type_id');
    }
}
