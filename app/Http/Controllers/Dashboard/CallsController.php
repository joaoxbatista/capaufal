<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\GlpiRequest;

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
	    $glpi_token = session()->get('glpi_session_token');

	    if($glpi_token)
        {
            $message = $GlpiRequest->store($glpi_token, 'Ticket', $data);
            return redirect()->route('static.home')->with(['message', $message]);
        }

        return null;
    }
}
