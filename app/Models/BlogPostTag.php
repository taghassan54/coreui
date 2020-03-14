<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BlogPostTag
 * @package App\Models
 * @version March 14, 2020, 9:24 am UTC
 *
 * @property boolean tag_id
 * @property boolean post_id
 */
class BlogPostTag extends Model
{
    use SoftDeletes;

    public $table = 'blog_post_tag';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tag_id',
        'post_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tag_id' => 'boolean',
        'post_id' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tag_id' => 'required',
        'post_id' => 'required'
    ];

    
}
