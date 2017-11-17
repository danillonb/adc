<?php

namespace App\Http\Controllers;

use Request;
use App\Dpto;
use App\Pessoa;
use App\Igreja;
use App\Http\Requests\DptoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DptoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {

        $lideres = Pessoa::
            orderBy('nome','asc')
            ->get();

        $igrejas = Igreja::
            orderBy('razao_social','asc')
            ->get();

        $dptos = Dpto::
            orderBy('departamento','asc')
            ->get();

        $relatorios_rapido = DB::table('pessoas') 
            ->select('departamento', DB::raw('count(*) as total'))
            ->groupBy('departamento')
            ->get();

        return view('tabelas.dpto.view',compact('lideres','igrejas','dptos','relatorios_rapido'));


    }

    public function deleta($id)
    {
        Dpto::destroy($id);

        return redirect()->route('dpto');
    }

    public function novo()
    {

    }

    public function cria(DptoRequest $param)
    {

        Dpto::create([
            'departamento' => $param['departamento'],
            'igreja' => $param['igreja'],
            'lider' => $param['lider'],
            ]);

        $param->session()->flash('alert-success', 'Inserido com sucesso!');
        return redirect()->route('dpto');
    }
}
