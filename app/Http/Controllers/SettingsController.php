<?php

namespace App\Http\Controllers;

use App\Models\settings;

class SettingsController extends Controller
{
    public function getSettings()
    {
        $data = settings::all()->toArray();
       
        return $data; 
    }
}
