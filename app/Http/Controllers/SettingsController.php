<?php

namespace App\Http\Controllers;

use App\Models\settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function getSettings()
    {
        $data = settings::first();
        return $data; 
    }

    public function setSettings(Request $request)
    {
        $data = $request->all();
        settings::find(1)->update($data);
        return response()->json($data);
    }
}
