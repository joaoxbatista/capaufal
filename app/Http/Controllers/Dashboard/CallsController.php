<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class CallsController extends Controller
{
    public function create(Request $request)
    {
        $service_id = $request->get('service_id');
        $service = Service::find($service_id);
        
        return view('dashboard.calls.create', compact('service'));
    }

    public function store(Request $request)
    {
	    $data = $request->except('_token');
	    $GlpiRequest = new GlpiRequest();
	    $message = $GlpiRequest->store($request->session()->get('session_token'), 'Ticket', $data);
	    echo $message;
    }
}
