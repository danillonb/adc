<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Parentesco;
use App\Pessoa;
use App\Http\Requests\ParentescoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ParentescoController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {

        $parentescos = Parentesco::
            orderBy('parentesco','asc')
            ->get();


        return view('tabelas.parentesco.view',compact('parentescos'));


    }

    public function deleta($id)
    {
        Parentesco::destroy($id);

        return redirect()->route('parentesco');
    }

    public function cria(ParentescoRequest $param)
    {

        Parentesco::create([
            'parentesco' => $param['parentesco'],
            ]);

        $param->session()->flash('alert-success', 'Inserido com sucesso!');
        return redirect()->route('parentesco');
    }
}
