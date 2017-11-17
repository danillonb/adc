<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Entrada;
use App\Pessoa;
use App\Http\Requests\EntradaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EntradaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {

        $entradas = Entrada::
            orderBy('entrada','asc')
            ->get();

        $relatorios_rapido = DB::table('pessoas') 
            ->select('procedencia', DB::raw('count(*) as total'))
            ->groupBy('procedencia')
            ->get();

        return view('tabelas.entradas.view',compact('entradas','relatorios_rapido'));


    }

    public function deleta($id)
    {
        Entrada::destroy($id);

        return redirect()->route('entrada');
    }

    public function cria(EntradaRequest $param)
    {

        Entrada::create([
            'entrada' => $param['entrada'],
            ]);

        $param->session()->flash('alert-success', 'Inserido com sucesso!');
        return redirect()->route('entrada');
    }
}