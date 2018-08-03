<?php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Tags;
use App\Models\TagsNews;
use Illuminate\Http\Request;


class AddNews extends Controller
{
    public function index()
    {

        $cat=Category::all();
        $tag=Tags::all();
        return view('adminviews.usersviews.addnews')->with(['tg'=>$tag,'ct'=>$cat]);

    }

    public function action(Request $request){

        $id= News::max('id') + 1;
        $news=new News();

       if($request->isMethod('post')){

           if($request->hasFile('image')) {
               $filename= md5($_FILES['image']['name']).'.img';
               $file = $request->file('image');
               $file->move(public_path() . '/gallery',$filename);
           }

           $news->id= $id;
           $news->category_id = $request-> get('category');
           $news->title = $request->get('title')?$request->get('title'):'No title';
           $news->article=$request->get('article')?$request->get('article'):'No article';
           $news->img = $request->hasFile('image')? $filename:'NI.png';
           $news->save();

           if($request->get('tags')) {



               for($i=0; sizeof($request->get('tags')) > $i; $i++) {
                   $tagsnews []= ['tag_id'=>$request->get('tags')[$i],'news_id'=>$id];
               }
                $tag = TagsNews::insert($tagsnews);
           }
           return redirect()->route('admin.news');
       }
        return redirect()->route('admin.news');
    }
}