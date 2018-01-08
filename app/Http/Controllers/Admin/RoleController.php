<?php
/**
 * Created by PhpStorm.
 * User: abc horizon
 * Date: 12/11/2017
 * Time: 5:58 PM
 */

namespace App\Http\Controllers\Admin;

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class RoleController extends  Controller
{

    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $role = new Role();
        $role->create($request->all());

        return redirect()->route('admin.role.index')
            ->with('success', 'You have created the role successfully');
    }

    public function edit($id)
    {
        $permissions=Permission::all();
        $rolePer=[];
        $role = Role::find($id);
        if ($role->permissions)
        {
            foreach ($role->permissions as $permission)
            {
                $rolePer[]=$permission->id;
            }
        }
        return view('admin.roles.edit', compact('role','permissions','rolePer'));
    }

    public function update($id, Request $request)
    {
        DB::beginTransaction();
        try {
            $role = Role::find($id);

            $role->update($request->all());
            $permissions=$request['permissions'];
            //[1,2,3]
            $role->permissions()->sync($permissions);

            DB::commit();
            return redirect()->route('admin.role.index')
                ->with('success', 'You have updated the role successfully');
        }catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.role.index')
                ->withErrors('error', $e->getMessage());
        }
    }
    
    public function delete($id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        return redirect()->route('admin.role.index')
            ->with('success', 'You have deleted the role successfully');
    }
}