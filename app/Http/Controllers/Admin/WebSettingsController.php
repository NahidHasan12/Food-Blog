<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebSettingsController extends Controller
{
    public function webSettings(){
        return view('backend.pages.web_settings');
    }
}
