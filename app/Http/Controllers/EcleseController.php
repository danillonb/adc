<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Eclese;
use App\Pessoa;
use App\Http\Requests\EcleseRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EcleseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {

        $ecleses = Eclese::
            orderBy('funcao','asc')
            ->get();

        $relatorios_rapido = DB::table('pessoas') 
            ->select('funcao_eclesiastica', DB::raw('count(*) as total'))
            ->groupBy('funcao_eclesiastica')
            ->get();

        return view('tabelas.eclese.view',compact('ecleses','relatorios_rapido'));


    }

    public function deleta($id)
    {
        Eclese::destroy($id);
        
        return redirect()->route('eclese');
    }

    public function cria(EcleseRequest $param)
    {

        Eclese::create([
            'funcao' => $param['funcao'],
            ]);

        $param->session()->flash('alert-success', 'Inserido com sucesso!');
        return redirect()->route('eclese');
    }
}