<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
	public function index() 
	{
	    $services = [
	        ['id' => 1, 'nome' => 'Serviço 01', 'tipo_id' => 1, 'categoria_id' => 1, 'grupo_id' => 1],
            ['id' => 2, 'nome' => 'Serviço 02', 'tipo_id' => 1, 'categoria_id' => 1, 'grupo_id' => 1],
            ['id' => 3, 'nome' => 'Serviço 03', 'tipo_id' => 1, 'categoria_id' => 1, 'grupo_id' => 1],

        ];
		return view('dashboard.service.index', compact('services'));
	}

	public function store(Request $request)
	{
		dd($request->all());		
	}
}
