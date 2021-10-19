<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Redirect;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function submit(Request $request)
    {
        $validator = Validator::make([], []);

        $validated = $request->validate([
            'username' => 'required|min:10|max:100',
            'password' => 'required|min:6',
            
        ]);

        
        $users = array(
            array(
                'username' => 'tnr@tnrsoft.com',
                'password' => '123456',
            ),
            array(
                'username' => 't1@tnrsoft.com',
                'password' => '111111',
            ),
            array(
                'username' => 't2@tnrsoft.com',
                'password' => '11111',
            ),

        );

       //////////////////////////////// var_dump($users);
       
       

        foreach ($users as $user) {
            if($request->username == $user['username'] && $request->password == $user['password']) {
                return view('pages.home');
            }
            
                
            
        }

        $validator->getMessageBag()->add('password', 'That password is incorrect.');
        return redirect($request -> url())
                    -> withErrors($validator)
                    -> withInput();
        
        
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
    public function edit($id)
    {
        //
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
        //
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
