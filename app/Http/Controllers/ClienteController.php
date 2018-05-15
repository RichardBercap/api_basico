<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

use Yajra\Datatables\Datatables;

class ClienteController extends Controller
{
    
    public function clients()
    {
        
        $users = Cliente::select(['name','lastname','edad']);

        return Datatables::of($users)->make();
            //return "Hello";

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();

        return response() ->json($clientes);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $cliente = new Cliente([
                'name'=>$request->input('nombre'),
                'lastname'=>$request->input('lastname'),
                'edad'=>$request->input('edad'),
                ]);

            //Log::info('clientes stored');
            $cliente->save();
            return response()->json(['status'=>true, 'Muchas gracias'], 200);

        } catch (\Exception $e){
            //Log::critical("No se ha podido añadir: {$e->getCode()} , {$e->getLine()} , {$e->getMessage()}");
            return response('Someting bad', 500 );
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
