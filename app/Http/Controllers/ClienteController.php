<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Municipio;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::with('municipios','estados')->get();
        return response()->json($clientes,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|unique:clientes,email',
            'data_nascimento'=>'required',
            'municipio_id'=> 'required',
        ]);
        $cliente = Cliente::create([
            'name'=> $fields['name'],
            'email'=> $fields['email'],
            'municipio_id'=> $fields['municipio_id'],
            'telefone'=> $request['telefone'],
            'data_nascimento'=> $fields['data_nascimento'],
        ]);
        $cliente->planos()->sync($request->plano);
        return response()->json($cliente, 200);        
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cliente::with('municipios','estados','planos')->find($id);
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
        $cliente = Cliente::find($id);
        $cliente->update($request->all());
        $cliente->planos()->sync($request->plano);
        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $cliente = Cliente::with('municipios','estados','planos')->find($id);
        if(!$cliente || $cliente->estados->sigla === 'SP'){
            foreach ($cliente->planos as $key => $plano) {
                if($plano->id===2){
                    return response([
                        'message'=>'Não é possível excluir o cliente!!'
                    ], 401);
                }
            }
        }
        return Cliente::destroy($id);
    }

    
}
