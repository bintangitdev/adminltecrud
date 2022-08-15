<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|confirmed'
        // ]);
        // $array = $request->only([
        //     'name', 'email', 'password'
        // ]);
        // $array['password'] = bcrypt($array['password']);
        // $user = User::create($array);
        // return redirect()->route('users.index')
        //     ->with('success_message', 'Berhasil menambah user baru');

        $request->validate([
            'NamaPegawai' => 'required',
            'Alamat' => 'required',
            'RolePekerjaan' => 'required',
        ]);
        Employee::create($request->all());

        return redirect()->route('employees.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employees)
    {
        return view('employees.edit', compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'NamaPegawai' => 'required',
            'Alamat' => 'required',
            'RolePekerjaan' => 'required',
        ]);
        Employee::create($request->all());

        return redirect()->route('employees.index')->with('succes','Update Data Berhasil di Input');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employees)
    {
        $employees->delete();

        return redirect()->route('employees.index')->with('succes','Data Berhasil di Hapus');
    }
}
