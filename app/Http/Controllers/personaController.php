<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class personaController extends Controller
{
    public function generar(Request $request)
    {
    	//$users =  Cliente::select(['name','lastname','edad']);
    	$users = DB::select("select name, lastname, edad from clientes where edad = '0'");

        return Datatables::of($users)->make();
    }
}
