<?php

namespace App\Http\Controllers\News;


use App\Models\Comments;

use App\Http\Controllers\Controller;

class CommentsPage extends Controller
{

    public function index($id)
    {

        $comm=Comments::join('news', 'news.id', '=', 'comments.article_id')
            ->select('comments.article_id', 'news.title', 'news.category_id','comments.comment','comments.updated_at','comments.user_name')
        ->where('user_id','=',$id);

        $name=$comm->limit(1)->get('user_name');

        $comments = $comm->paginate(5);


       return view('news.category.commentsofuser')->with(['comments'=>$comments,'name'=>$name]);
    }


}


