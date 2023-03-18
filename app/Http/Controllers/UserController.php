<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function users()
    {
        $user = User::all();
        return view('admin.users', compact('user'));
    }


    public function addusers()
    {
        return view('admin.addUsers');
    }

    public function insertusers(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $rules = [
                'firstname' => 'required',
                'password' => 'required',
                'email' => 'required',
                'role' => 'required',
            ];

            $CustomMessage = [
                'firstname.required' => 'firstname is required',
                'password.required' => 'password is required',
                'email.required' => 'email is required',
                'role.required' => 'role is required',
            ];
            $this->validate($request, $rules, $CustomMessage);


            $user = new User;
            $user->name = $request->firstname;
            $user->password = Hash::make($request->password);
            $user->email = $request->email;
            $user->role = $request->role;
            $user->status = $request->status;
            $user->save();
            return redirect()->back()->with('status',"User Added Successfully");
        }
        return view('admin.addCategory');
    }

    public function edituser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.editUsers', compact('user'));
    }

    public function updateuser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();
        return redirect()->back()->with('status',"Post Added Successfully");
    }

    public function deleteuser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('status',"User deleted Successfully");
    }

}
