<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\GlpiRequest;
use Auth;
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
        $service  = Service::find($request->get('service_id'));
        $user_settings = Auth::user()->settings;
        
        $data = "            
        [
            {
                \"slts_tto_id\": {$request->get('service_id')},
                \"name\": \"{$service->name}\",
                \"content\": \" Nome: {$user_settings->first_name} {$user_settings->last_name} E-amil: {$user_settings->email} Telefhone 1: {$user_settings->phone1} Telefhone 2: {$user_settings->phone2} Descrição: {$request->get('description')} \"    
            }
        ]";

        echo $data;

        

        $GlpiRequest = new GlpiRequest();
        $glpi_token = session()->get('glpi_session_token');

        if($glpi_token)
        {
            $message = $GlpiRequest->store($glpi_token, 'Ticket', json_decode($data));
            flash()->success('Chamado criado com sucesso!'); 
            return redirect()->route('static.home');
        }

        

        
    }
}
