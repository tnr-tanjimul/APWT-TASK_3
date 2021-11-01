<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userlist()
    {
        return View('pages.admin.users')->with('users',User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userId)
    {
        $var = User::where('id', $userId)->first();
        return view('pages.admin.user-edit')->with('data', $var);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId)
    {
        

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phoneNo' => 'required|min:11',
            'balance' => 'required',
            'commission' => 'required',
        ]);



        $server = User::find($userId);
        $server->name = $request->name;
        $server->email = $request->email;
        $server->phoneNo = $request->phoneNo;
        $server->balance = $request->balance;
        $server->commission = $request->commission;


        if($request->password != null)
        {
            $server->password = bcrypt($request->password);
        }


       

        if($server->save()) {
            return redirect()->route('admin.userlist')->with("success","User {$request->name} update successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId)
    {
        $var = User::where('id', $userId)->first();
        $name = $var->name;
        $var->delete();
        return redirect()->back()->with("error","User {$name} Successfully Deleted");
    }
}
