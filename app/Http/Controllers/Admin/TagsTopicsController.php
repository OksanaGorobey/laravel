<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use App\Models\Category;
use Illuminate\Http\Request;

class TagsTopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tg = Tags::orderBy('id','desc');
        $tag=$tg->paginate(5);
        $top=Category::orderBy('id','desc')->get(['id','category']);
        return view('adminviews.usersviews.tags')->with(['tags'=>$tag, 'topic'=>$top]);
    }


    public function store(Request $request)
    {
        $tag=new Tags();
        $top=new Category();
        if($request->get('tag')){
        $tag->tag_name = mb_strtoupper($request->get('tag'));
        $tag->save();
        }else{
            $top->category = mb_convert_case($request->get('top'),MB_CASE_TITLE, "UTF-8");
            $top->save();
        }
        return redirect()->route('admin.tatop.index');
    }


}


