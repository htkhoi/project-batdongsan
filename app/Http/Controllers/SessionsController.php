<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginFormRequest;
use App\Http\Controllers\Controller;
use Auth;
use Hash;

class SessionsController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('sessions.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(LoginFormRequest $request)
    {
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect()
                ->route('admin.dashboard.index')
                ->withSuccess('New Admin Successfully Created.');
        } else {
            return back()->with('danger', 'Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();
        return redirect()->intended('login');
    }
}
