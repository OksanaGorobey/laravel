<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddAdmin extends Controller
{
   public function index(){
       $user= new User();
       $user->email="Cat@owl.org";
       $user->name="Hanheld";
       $user->password=bcrypt('123456');
       $user->role_id='admin';
       $user->save();

       return 'all ok';

   }
}
