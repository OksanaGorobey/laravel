<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query=User::orderBy('id','ask');
        if($request->get('search')){
            $query->where('name','Like','%'.$request->get('search').'%')
            ->orWhere('email','Like','%'.$request->get('search').'%');
        }
        $users =$query->paginate(5);

        return view('adminviews.usersviews.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User();
        $user->fill($request->all());
//        $user->name=$request->get('name');
//        $user->email=$request->get('email');
//        $user->password=bcrypt($request->get('password'));
        $user->save();
        return redirect()->route('admin.admins.index')->with('message','Add successfully');
    }



    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.admins.index');
    }

    public function edit(User $user)
    {
        return view('adminviews.usersviews.form')->with('user',$user);
    }

    public function update($id,Request  $request)
    {
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->save();

        return redirect()->route('admin.admins.index')->with('message1','Update');
    }


}


