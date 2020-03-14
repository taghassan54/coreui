<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BlogCategory
 * @package App\Models
 * @version March 14, 2020, 9:23 am UTC
 *
 * @property string name
 * @property string slug
 * @property string description
 */
class BlogCategory extends Model
{
    use SoftDeletes;

    public $table = 'blog_categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'slug',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
    ];

    public function Posts()
    {
        return $this->hasMany(Post::class,'category_id');
    }
    public function getPostsCountAttribute(){
        return $this->Posts->count();
    }
    //PostsCount
}
