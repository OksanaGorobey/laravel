<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class News extends Authenticatable
{
    use Notifiable;

    protected $table = 'news';


    public function categories(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function news(){
        return $this->hasMany(Comments::class,'article_id','id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title','article', 'img', 'category_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token'
    ];

}