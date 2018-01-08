<?php
/**
 * Created by PhpStorm.
 * User: abc horizon
 * Date: 09/12/2017
 * Time: 7:05 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreatePermissionRequest;
use App\Permission;
use Illuminate\Routing\Controller;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.list', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(CreatePermissionRequest $request)
    {
        $permission = new Permission();
        $permission->create([
            'name' => $request['name'],
            'slug' => strtolower(str_replace(' ', '-', $request['name']))
        ]);

        return redirect()->route('admin.permission.index')
            ->with('success', 'You have successfully slept in the class');
    }
}