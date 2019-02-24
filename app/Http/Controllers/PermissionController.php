<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('manage.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|alphadash|unique:permissions',
            'display_name' => 'required',
            'description' => 'required|max:255',
        ]);


        if(Permission::create($request->all())){
            return redirect()->route('permission.index')->with('success', "Permission created successfully");
        } else {
            return redirect()->route('permission.create')->with('error', 'Sorry a problem occured while creating this permission')->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(permission $permission)
    {
        return view('manage.permission.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('manage.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|max:255|alphadash',
            'display_name' => 'required',
            'description' => 'sometimes|max:255',
        ]);


        if($permission->update($request->all())){
            return redirect()->route('permission.index')->with('success', "Permission created successfully");
        } else {
            return redirect()->route('permission.create')->with('error', 'Sorry a problem occured while creating this permission')->withInput();
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('permission.index')->with('success' , 'Permission deleted successfully');
    }
}
