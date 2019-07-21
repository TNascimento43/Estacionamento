<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Veiculo;

class ControladorVeiculo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('veiculo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veiculo = new Veiculo();
        $veiculo->marca = $request->input('marcaVeiculo');
        $veiculo->modelo = $request->input('modeloVeiculo');
        $veiculo->placa = $request->input('placa');
        $veiculo->proprietario = $request->input('proprietario');
        $veiculo->telefone = $request->input('telefone');
        $veiculo->horaEntrada= $request->input('hora');
        $veiculo->codigoVaga = $request->input('vagaVeiculo');
        $veiculo->save();
        return redirect('/vagas');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculo = Veiculo::find($id);
        if(isset($veiculo)) {
            return view('editarVeiculo', compact('veiculo'));
        }

        return redirect('/veiculo');
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
        $veiculo = Veiculo::find($id);
        if(isset($veiculo)) {
            $veiculo->marca = $request->input('marcaVeiculo');
            $veiculo->modelo = $request->input('modeloVeiculo');
            $veiculo->placa = $request->input('placa');
            $veiculo->proprietario = $request->input('proprietario');
            $veiculo->telefone = $request->input('telefone');
            $veiculo->horaEntrada= $request->input('hora');
            $veiculo->save();
        }

        return redirect('/veiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo = Veiculo::find($id);
        if (isset($veiculo)){
            $veiculo->delete();
        }
        return redirect('/vagas');
    }
}
