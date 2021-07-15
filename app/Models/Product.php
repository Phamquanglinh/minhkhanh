<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Yish\Imgur\Facades\Upload;
class Product extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'products';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function setSlugAttribute()
    {
        $this->attributes['slug'] = Str::slug($this->name, '-') . '.html';
    }
    public function setTrader(){
        $category = Category::find($this->id);
        return $category->trades()->first()->name;
    }
    public  function setType(){
        $category = Category::find($this->id);
        switch ($category->type){
            case 0: return "Camera";break;
            case 1: return "Thang máy";break;
            case 2: return "Máy quay";break;
            default: return "không xác định";
        }
    }
    public function setThumbnail(){
        $list = $this->attributes['avatar'];
        $tmp = str_replace(['[',']','"'],"",$list);
        $avatars = explode(",",$tmp);
        return $avatars[0];
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
