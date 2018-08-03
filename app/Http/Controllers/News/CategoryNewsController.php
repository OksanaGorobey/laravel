<?php

namespace App\Http\Controllers\News;


use App\Models\Comments;
use App\Models\News;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryNewsController extends Controller
{

    public function index(){

        $comments=Comments::select(DB::raw('count(id) as count_id, user_name'))->orderBy('count_id','desc')->groupBy('user_name')->limit(5)->get();

        $catgrs =Category::all();
        $menu= Menu::orderBy('id', 'ask')->get(['name','id']);
           $m1=$menu->where('id','=',1);
        $m2=$menu->where('id','=',2);
        $m3=$menu->where('id','=',3);
        $news = News::orderBy('updated_at','desc')
            ->limit(5)
            ->get(['id','title','img','updated_at', 'category_id']);

        return view('news.welcome')->with(['catgrs'=>$catgrs, 'comments'=>$comments, 'news'=>$news, 'mf'=>$m1, 'ms'=>$m2,'mt'=>$m3]);

    }

}

