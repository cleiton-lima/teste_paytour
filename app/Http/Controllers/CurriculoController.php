<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CurriculoStoreRequest;
use App\Models\Curriculo;
use Exception;
use Illuminate\Support\Str;

class CurriculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('index');
        return view('form_curriculo');

        // $curriculo = Curriculo::latest()->paginate(5);

        // return view('curriculo.index', compact('curriculo'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curriculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CurriculoStoreRequest $request)
    {
        try{
            $nomeUsuario = Str::slug($request->nome, '_');
            $nomeArquivo = $nomeUsuario . "_" . now()->timestamp . ".pdf";

            $arquivo = $request->arquivo->storeAs(
                '',
                $nomeArquivo,
                'curriculos'
            );

            Curriculo::create(
                array_merge(
                    $request->all(),
                    ['arquivo' => $arquivo]
                )
            );
            // dd('passou');
            return redirect(route('web.curriculo.index'))
                ->with(
                    'success',
                    'Curriculo armazenado com sucesso! ' .
                    'Em breve nossa equipe entrará em contato.'
                );
        } catch (Exception $e) {
            dd($e);
            report($e);

            redirect(route('web.curriculo.index'))
                ->with(
                    'error',
                    'Erro! Não foi possível efetuar o cadastro. ' .
                    'Tente novamente em algumas horas.'
                );
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('curriculo.show', compact('curriculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('curriculo.edit', compact('curriculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $curriculo = Curriculo::find($id);

        $curriculo->update($request->all());

        return redirect()->route('curriculo.index')
            ->with('success', 'Curriculo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curriculo = Curriculo::find($id);

        $curriculo->delete();

        return redirect()->route('curriculo.index')
            ->with('success', 'Curriculo removido com sucesso!');
    }
}
