<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Laravelista\Comments\Commentable;
use Spatie\Permission\Traits\HasRoles;
/**
 * Class Post
 * @package App\Models
 * @version March 14, 2020, 9:27 am UTC
 *
 * @property boolean category_id
 * @property string title
 * @property string slug
 * @property string description
 * @property string summary
 * @property string content
 * @property string status
 * @property boolean comments
 * @property boolean featured
 */
class Post extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;
    use Commentable;
    use HasRoles;
    public $table = 'blog_posts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'summary',
        'content',
        'status',
        'comments',
        'auther_id',
        'featured'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'auther_id' => 'integer',
        'category_id' => 'boolean',
        'title' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'summary' => 'string',
        'content' => 'string',
        'status' => 'string',
        'comments' => 'boolean',
        'featured' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required',
        'title' => 'required',
        'summary' => 'required',
        'content' => 'required',
        'status' => 'required',


    ];


    public function Category()
    {
        return $this->belongsTo(BlogCategory::class,'category_id');
    }

    public function getCategoryNameAttribute(){
        return $this->Category?$this->Category->name:"no Category ";
    }
    public function getShowStatusAttribute(){
        return $this->status;
    }
    public function getAutherAttribute(){
        return $this->auther_id;
    }

}
