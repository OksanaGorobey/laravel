<?php

namespace App\Http\Controllers\News;

use App\Models\Tags;
use App\Models\TagsNews;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\Comments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsSearchPage extends Controller
{

    public function index($tag)
    {

        $nametag=Tags::where('id','=',$tag)->get(['tag_name','id']);

        $new=TagsNews::select('news.title', 'news.id','news.img', 'news.updated_at', 'category_id')
            ->join('news','tagsnews.news_id','=','news.id')
            ->where('tagsnews.tag_id','=',$tag)->orderBy('updated_at','asc');
        $tags=$new->paginate(5);

        return view('news.category.tags')->with(['tags'=>$tags, 'nametag'=>$nametag]);
    }

}


