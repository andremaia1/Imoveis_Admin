<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Administrador::all();
        
        return view('administrador.admin_list', compact('admins'));
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
    
    public function login()
    {
        return view('auth.login');
    }
    
    public function logar(Request $request)
    {
        $dados = ['email' => $request->get('email'), 'password' => $request->get('password')];
        
        if (Auth()->guard('administrador')->attempt($dados)) {
            return redirect('/admin');
        } else {
            return redirect('/admin/login')
                ->withErrors(['erroLogin' => 'Erro. Email ou senha inválidos!'])
                ->withInput();
        }
    }
    
    public function logout()
    {
        auth()->guard('administrador')->logout();
        return redirect('/admin');
    }
}