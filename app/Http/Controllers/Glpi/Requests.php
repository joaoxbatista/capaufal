<?php

namespace App\Http\Controllers\Glpi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GlpiRequest as GlpiRequest;

class Requests extends Controller
{
    public function login(Request $request)
    {
        // $GlpiRequest = new GlpiRequest();
        
        // $GlpiRequest->setCredentials($request->get('username'), $request->get('password'));
        
        // $token = $GlpiRequest->getSessionToken();
        
        // $request->session()->put('session_token', $token);

        return redirect()->route('dashboard.services.create');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->back();
    }


}
