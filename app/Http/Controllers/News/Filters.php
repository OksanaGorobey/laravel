<?php

namespace App\Http\Controllers\News;



use App\Models\TagsNews;
use App\Models\Category;
use App\Models\News;
use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Filters extends Controller
{

    public function index(Request $request)
    {
        $tags=Tags::all();
        $cat=Category::all();
        $nw= News::select('updated_at')->orderBy('updated_at','asc')->distinct()->get();


        if($request->get('sub')){
             if($request->get('tags')){

                 $new=TagsNews::select('news.title', 'news.id','news.img', 'news.updated_at', 'category_id')
                     ->join('news','tagsnews.news_id','=','news.id')
                     ->whereIn('tagsnews.tag_id',$request->get('tags'))->orderBy('updated_at','asc');

             }else{
                 $new= new News();
             }
            if($request->get('category')){
                $newc=$new->whereIn('category_id',$request->get('category'));

            }else{
                $newc=$new;

            }
            if($request->get('at') && $request->get('at') !== 0
            && $request->get('to') && $request->get('to') !== 0 ){

            $arr []= $request->get('at');
            array_push($arr,$request->get('to'));
            $newt=$newc->whereBetween('updated_at',$arr)->get();


            }elseif($request->get('at') && $request->get('at') !== 0
                || $request->get('to') && $request->get('to') !== 0){

                if($request->get('at') && $request->get('at') !== 0){
                    $newt=$newc->where('updated_at','>',$request->get('at'))->get();
                }
                $newt=$newc->where('updated_at','<',$request->get('to'));

            }else {
                $newt=$newc->get();
            }



           return view('news.category.partials.filter')->with(['news'=>$newt]);

        }

        return view('select')->with(['tgs'=>$tags,'ctg'=>$cat,'nw'=>$nw]);

    }

}


