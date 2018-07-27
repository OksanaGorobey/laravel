<?php

namespace App\Http\Controllers\News;


use App\Models\News;
use App\Models\Tags;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryNewsController extends Controller
{

    public function index(Request $request){

        $catgrs =Category::all();
        $news = News::orderBy('updated_at','desc')
            ->limit(5)
            ->get(['id','title','img','updated_at', 'category_id']);

        return view('news.welcome')->with(['catgrs'=>$catgrs, 'news'=>$news]);

    }
}

