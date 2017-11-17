<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Ministerial;
use App\Pessoa;
use App\Http\Requests\MinisterialRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class MinisterialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {

        $funcao_ministerial = Ministerial::
            orderBy('funcao','asc')
            ->get();

        $relatorios_rapido = DB::table('pessoas') 
            ->select('funcao_ministerial', DB::raw('count(*) as total'))
            ->groupBy('funcao_ministerial')
            ->get();

        return view('tabelas.ministerial.view',compact('funcao_ministerial','relatorios_rapido'));


    }

    public function deleta($id)
    {
        Ministerial::destroy($id);

        return redirect()->route('ministerial');
    }

    public function cria(MinisterialRequest $param)
    {

        Ministerial::create([
            'funcao' => $param['funcao'],
            'descricao' => $param['descricao'],
            ]);

        $param->session()->flash('alert-success', 'Inserido com sucesso!');
        return redirect()->route('ministerial');
    }
}