<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Igreja;
use App\Pessoa;
use App\Uf;
use App\Http\Requests\IgrejaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {

        $ufs = Uf::
        	orderBy('uf','asc')
            ->get();

        $igrejas = Igreja::
            orderBy('nome','asc')
            ->get();

        $pessoas = Pessoa::
        	orderBy('nome','asc')
        	->get();

        $relatorios_rapido = DB::table('pessoas') 
            ->select('igreja', DB::raw('count(*) as total'))
            ->groupBy('igreja')
            ->get();

        return view('cadastro.pessoa.view',compact('igrejas','relatorios_rapido','ufs','pessoas'));


    }

    public function deleta($id)
    {
        Igreja::destroy($id);

        return redirect()->route('igreja');
    }

    public function cria(IgrejaRequest $param)
    {

        Igreja::create([
            'entrada' => $param['entrada'],
            ]);

        $param->session()->flash('alert-success', 'Inserido com sucesso!');
        return redirect()->route('igreja');
    }
}
