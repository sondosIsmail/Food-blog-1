<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class UserController extends Controller
{
    use ImageTrait;

    public function index(){
        $users = User::all();


        return view('dashboard.users.index',compact('users'));
    }

    public function create(){

        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        $request_data = $request->except(['password','image']);

        $request_data['password']= bcrypt($request->password);

        $user = User::create($request_data);
        $image = new Image(['name'=>$this->saveImage($request)]);
        $image->imagable()->associate($user);
        $image->save();

        return redirect('/admin/users');

    }

    public function destroy(User $user)
    {

        $user->delete();
        return redirect()->route('users.index')->with('message', 'User deleted successfully');
    }

    public function edit(User $user)
    {

        return view('dashboard.users.edit', compact('user'));

    }



    public function update(Request $request, User $user)
    {

        $user->update($request->all());
        $user->images()->delete();
        $image = new Image(['name'=>$this->saveImage($request)]);
        $image->imagable()->associate($user);
        $image->save();
        return redirect('/admin/users');

    }
}
