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
        
        $service_id = $request->get('service_id');
        $service = Service::find($service_id);
        dd($service->toArray());

        
    }
}
