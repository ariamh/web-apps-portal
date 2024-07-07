<?php

namespace App\Http\Controllers;

use App\Models\WebApp;

class WebAppController extends Controller
{
    public function index()
    {
        $webApps = WebApp::all();
        return view('web-apps.index', compact('webApps'));
    }
}
