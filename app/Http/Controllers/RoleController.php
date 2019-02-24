<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('manage.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('manage.roles.create', compact('permissions'));
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
            'name' => 'required|max:255|alphadash|unique:roles',
            'display_name' => 'required',
            'description' => 'required|max:255',
        ]);

        $role= new Role();
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;

        $role->save();

        if($request->permissions){
           $role->syncPermissions(explode(',', $request->permissions));
        } 

        return redirect()->route('role.index')->with('success', "Role created successfully");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('manage.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        // $role = Role::where('id', $role->id)->with('permissions')->get();
        $role = Role::where('id', $role->id)->with('permissions')->first();
        // dd($role);
        $permissions = Permission::all();
        return view('manage.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|max:255|alphadash',
            'display_name' => 'required',
            'description' => 'required|max:255',
        ]);

        $role->update($request->all());


        if($request->permissions){
            $role->syncPermissions(explode(',', $request->permissions));
        }

        return redirect()->route('role.index')->with('success', "Role updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
