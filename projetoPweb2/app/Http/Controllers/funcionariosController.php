<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use Collective\Html\HtmlServiceProvider;
use App\Http\Requests\FuncionarioRequest;


class funcionariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $funcionarios = Funcionario::all();

        return view('funcionarios.funcionarios',['funcionarios'=>$funcionarios]);
    }
    public function create(){
        return view('funcionarios.create');
    }
    public function store(FuncionarioRequest $request){

        $input = $request->all();
        Funcionario::create($input);
        return redirect()->route('funcionarios');
    }
    public function destroy($id){

        Funcionario::find($id)->delete();

        return redirect('funcionarios');
    }
    public function edit($id){

        $funcionario = Funcionario::find($id);

        return view('funcionarios.edit', compact('funcionario'));
    }
    public function update(FuncionarioRequest $request, $id){
        $carro = Funcionario::find($id)->update($request->all());

        return redirect()->route('funcionarios');
    }
}

