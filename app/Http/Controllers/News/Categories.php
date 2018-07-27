<?php

namespace App\Http\Controllers\News;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Categories extends Controller
{

    public function index($id)
    {


        $cat=Category::where('id','=',$id)->get(['category','id']);
        $new=News::orderBy('updated_at','desc')
            ->where('category_id','=', $id);
        $news =$new->paginate(5);


     return view('news.category.page')->with(['cat'=>$cat,'news'=>$news]);

    }
}


