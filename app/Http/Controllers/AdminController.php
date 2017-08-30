<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use TallerAplicaciones\Http\Requests;
use TallerAplicaciones\Http\Requests\AdminRequest;
use TallerAplicaciones\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.index');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function store(AdminRequest $request)
    {
        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
          return Redirect::to('Admin');
          # code...
        }
        Session::flash('message-error','Datos son incorrectos');
        return Redirect::to('login');
    }
    public function logout()
    {
      Auth::logout();
      return Redirect::to('login');
    }
}
