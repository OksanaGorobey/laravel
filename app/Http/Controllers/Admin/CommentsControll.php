<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsControll extends Controller
{
    public function index()
    {

        $c= new Comments();
        $com = $c->orderBy('active','desc')->paginate(5);

     return view('adminviews.usersviews.comments')->with(['comm'=>$com]);

    }

    public function action($id)
    {

        $com = Comments::findOrFail($id);

        if($com->active === 1) {

            $com->active = 0;
            $com->save();
        }else {
            $com->active = 1;
            $com->save();
        }



        return redirect()->route('admin.coms.index');
    }


    public function destroy($id)
    {
        $com = Comments::findOrFail($id);
        $com->delete();
        return redirect()->route('admin.coms.index');
    }
    public function edit( $id){

        $comments=Comments::findOrFail($id);

        return view('adminviews.usersviews.commentsform')->with('comments',$comments);
    }

    public function update($id,Request  $request)
    {

            $com = Comments::findOrFail($id);
            $com->update(['comment' => $request->get('comments')]);

        return redirect()->route('admin.coms.index');
    }
}
