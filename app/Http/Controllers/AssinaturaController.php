<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Assinatura;
use App\Pessoa;
use App\Ministerial;
use App\Http\Requests\AssinaturaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AssinaturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {

        $pessoas = Pessoa::
            orderBy('nome','asc')
            ->get();

        $ministerials = Ministerial::
            orderBy('funcao','asc')
            ->get();

        $assinaturas = Assinatura::
            orderBy('assinatura','asc')
            ->get();

        return view('cadastro.assinatura.view',compact('pessoas','ministerials','assinaturas'));


    }

    public function consulta($id)
    {

        $pessoas = Pessoa::
            orderBy('nome','asc')
            ->get();

        $ministerials = Ministerial::
            orderBy('funcao','asc')
            ->get();

        $assinaturas = Assinatura::
            orderBy('assinatura','asc')
            ->get();

        $ass = Assinatura::find($id);

        return view('cadastro.assinatura.detalhe',compact('pessoas','ministerials','assinaturas','ass'));


    }

    public function deleta($id)
    {
        Assinatura::destroy($id);

        return redirect()->route('assinatura');
    }

    public function atualiza(AssinaturaRequest $param)
    {

        $assinatura = Assinatura::find($param['id']);

        $assinatura->update([
            'assinatura' => $param['assinatura'],
            'cargo' => $param['cargo'],
            'registro' => $param['registro'],
            ]);
        return redirect()->route('assinatura');

    }

    public function cria(AssinaturaRequest $param)
    {

        Assinatura::create([
            'assinatura' => $param['assinatura'],
            'cargo' => $param['cargo'],
            'registro' => $param['registro'],
            ]);

        $param->session()->flash('alert-success', 'Inserido com sucesso!');
        return redirect()->route('assinatura');
    }
}
