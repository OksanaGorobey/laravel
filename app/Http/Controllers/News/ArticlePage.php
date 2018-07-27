<?php

namespace App\Http\Controllers\News;

use App\Models\TagsNews;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\Comments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlePage extends Controller
{

    public function index($cat, $numb)
    {
        $tags=TagsNews::select('tags.tag_name', 'tags.id' )
            ->join('tags','tagsnews.tag_id','=','tags.id')
            ->where('tagsnews.news_id','=',$numb)
            ->get();

        $news = News::where('id', '=', $numb)
            ->get(['title', 'id', 'img', 'article']);

        $comm = new Comments();
        $precomm = $comm->orderBy('like', 'desc')
            ->where('article_id', '=', $numb)->where('active', '=', 0);
        $comments = $precomm->simplepaginate(3);
        return view('news.article.page')->with(['news' => $news, 'comments' => $comments, 'cat' => $cat, 'tags'=>$tags]);
    }

    public function store($cat, $id, Request $request)
    {
        $comm = new Comments();
        $comm->article_id = $id;
        $comm->user_name = Auth::user()->name;
        $comm->user_id = Auth::user()->id;
        $comm->comment = $request->get('message');
        $cat != 2 ?$comm->active = 0 : $comm->active = 1;
        $comm->save();
        return redirect()->back();
    }

    public function pluslike($page, $id)
    {
        $comm = Comments::findOrFail($id);
        $comm->update(['like' => $comm->like + 1]);
        return redirect()->back();
    }

    public function minuslike($page, $id)
    {
        $comm = Comments::findOrFail($id);
        $comm->update(['like' => $comm->like - 1]);
        return redirect()->back();
    }

}


