<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index()
{
    $users = User::all();
    return view('admin/Admindashboard', compact('users'));
}


 public function deleterecord($id)
{
    User::destroy($id);
      return redirect()->back();
}

public function edit($id)
{
    $user = User::find($id);

    return view('admin.edituser', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::find($id);

    $user->name = $request->name;
    $user->email = $request->email;
    $user->role = $request->role;

    $user->save();

     return redirect('/admin/Admindashboard');
}

}