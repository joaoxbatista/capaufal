<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use App\Models\GlpiRequest as GlpiRequest;

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

		$data = $request->except('_token');

		$GlpiRequest = new GlpiRequest();
			
		$message = $GlpiRequest->store($request->session()->get('session_token'), 'Ticket', $data);

		return redirect()->route('dashboard.services.success');
		
	}

	public function success(Request $request)
	{
		return view('dashboard.service.success_message');
	}
}
