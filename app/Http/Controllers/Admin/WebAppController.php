<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebApp;
use Illuminate\Http\Request;

class WebAppController extends Controller
{
    public function index()
    {
        $webApps = WebApp::all();
        return view('admin.web-apps.index', compact('webApps'));
    }

    public function create()
    {
        return view('admin.web-apps.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'url' => 'required|url',
            'category' => 'required',
        ]);

        WebApp::create($validatedData);

        return redirect()->route('admin.web-apps.index')->with('success', 'Web app created successfully.');
    }

    public function edit(WebApp $webApp)
    {
        return view('admin.web-apps.edit', compact('webApp'));
    }

    public function update(Request $request, WebApp $webApp)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'url' => 'required|url',
            'category' => 'required',
        ]);

        $webApp->update($validatedData);

        return redirect()->route('admin.web-apps.index')->with('success', 'Web app updated successfully.');
    }

    public function destroy(WebApp $webApp)
    {
        $webApp->delete();

        return redirect()->route('admin.web-apps.index')->with('success', 'Web app deleted successfully.');
    }
}
