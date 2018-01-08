<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 19/11/17
 * Time: 12:03 م
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }
    public function create(){
        $roles=Role::all();
        return view('admin.users.create',compact('roles'));
    }
    public function store(Request $request){
        if ($request['password']!=$request['password_confirmation']){
            return redirect()->back()->with('error','please check password to be confirm  ');
        }
        $user=new User();
        $user=$user->create($request->all());
        $ids=$request['roles'];
        if (!empty($ids))
        {
            foreach ($ids as $id)
            {
                $user->role()->attach($id);
            }
        }
        return redirect()->route('admin.user.index')->with('success','you have successfully the user');


    }
    public function edit($id){
        $roles=Role::all();
        $user=User::find($id);
        $userRole=[];
        foreach ($user->roles as $role)
        {
            $userRole[]=$role->id;
        }

        return view('admin.users.edit',compact('user','roles','userRole'));

    }
    public function update(Request $request,$id){
        $user =User::find($id);
        $user->update($request->all());
        // update select
        $ids=$request['roles'];
        $user->role()->sync($ids);

        return redirect()->route('admin.user.index')->with('success','you have successfully updated the user');

    }
    public function delete($id){
        $user=User::find($id);
        foreach ($user->role as $role){
            $user->role()->detach($role);
        }
        $user->delete();
        return redirect()->route('admin.user.index')->with('success','you have successfully deleted the user');

    }

}