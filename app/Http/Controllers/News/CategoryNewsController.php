<?php

namespace App\Http\Controllers\News;


use App\Models\Comments;
use App\Models\News;
use App\Models\Menu;
use App\Models\Category;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryNewsController extends Controller
{

    public function index(){

        $comments=Comments::join('users','comments.user_id','=','users.id')
             ->select('comments.user_id','users.name')
            ->groupBy('user_id')
            ->orderBy(DB::raw('count(comments.id)', 'desc'))
            ->limit(5)
            ->get();


        $articles = Comments::join('news', 'news.id', '=', 'comments.article_id')
            ->select('comments.article_id', 'news.title', 'news.category_id')
            ->groupBy('article_id')
            ->orderBy(DB::raw('count(comments.id)', 'desc'))
            ->limit(3)
            ->get();


        $catgrs =Category::all();
        $menu= Menu::orderBy('id', 'ask')->get(['name','id']);
           $m1=$menu->where('id','=',1);
        $m2=$menu->where('id','=',2);
        $m3=$menu->where('id','=',3);
        $news = News::orderBy('updated_at','desc')
            ->limit(5)
            ->get(['id','title','img','updated_at', 'category_id']);

        return view('news.welcome')->with(['catgrs'=>$catgrs, 'comments'=>$comments, 'news'=>$news, 'articles'=>$articles, 'mf'=>$m1, 'ms'=>$m2,'mt'=>$m3]);

    }

}

