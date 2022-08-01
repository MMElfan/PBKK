<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function datauser()
    {
        $datauser = User::get();
        return view ('datauser', ['datauser' => $datauser]);
    }

    public function formuser()
    {
        return view ('formuser');
    }
    
    public function adduser ( Request $request )
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect("/datauser");
    }

    public function deleteuser ($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect("/datauser");
    }
    

}
