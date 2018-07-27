<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Comments extends Authenticatable
{
    use Notifiable;

    protected $table = 'comments';


    public function articles(){
        return $this->belongsTo(News::class,'article_id','id');
    }
    public function users(){
        return $this->belongsTo(News::class,'user_id','id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'like', 'comment','user_name',
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
