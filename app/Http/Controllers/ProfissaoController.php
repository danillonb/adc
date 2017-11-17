<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Profissao;
use App\Pessoa;
use App\Http\Requests\ProfissaoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfissaoController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {

        $profissaos = Profissao::
            orderBy('profissao','asc')
            ->get();

        $relatorios_rapido = DB::table('pessoas') 
            ->select('profissao', DB::raw('count(*) as total'))
            ->groupBy('profissao')
            ->get();

        return view('tabelas.profissao.view',compact('profissaos','relatorios_rapido'));


    }

    public function deleta($id)
    {
        Profissao::destroy($id);

        return redirect()->route('profissao');
    }

    public function cria(ProfissaoRequest $param)
    {

        Profissao::create([
            'profissao' => $param['profissao'],
            ]);

        $param->session()->flash('alert-success', 'Inserido com sucesso!');
        return redirect()->route('profissao');
    }
}
