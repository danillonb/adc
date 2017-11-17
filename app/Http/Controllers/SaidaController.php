<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Saida;
use App\Pessoa;
use App\Http\Requests\SaidaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SaidaController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {

        $saidas = Saida::
            orderBy('saida','asc')
            ->get();

        $relatorios_rapido = DB::table('pessoas') 
            ->select('destino', DB::raw('count(*) as total'))
            ->groupBy('destino')
            ->get();

        return view('tabelas.saida.view',compact('saidas','relatorios_rapido'));


    }

    public function deleta($id)
    {
        Saida::destroy($id);

        return redirect()->route('saida');
    }

    public function cria(SaidaRequest $param)
    {

        Saida::create([
            'saida' => $param['saida'],
            ]);

        $param->session()->flash('alert-success', 'Inserido com sucesso!');
        return redirect()->route('saida');
    }
}
