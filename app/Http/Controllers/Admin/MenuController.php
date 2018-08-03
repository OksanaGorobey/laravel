<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query=Menu::orderBy('id','desk')->get(['id','name','id_ex']);


        return view('adminviews.usersviews.menu')->with(['query'=>$query]);
    }

    public function store(Request $request)
    {
        $user=new Menu();
        $user->id=$request->get('id');
        $user->name=$request->get('menu');
        $user->save();

        return redirect()->route('admin.menu.index');
    }

    public function destroy($id)
    {
        $user = Menu::where('id_ex','=',$id);

        $user->delete();

        return redirect()->route('admin.menu.index');
    }



}


