<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    public function getServices(){
        
        $services = Service::all();
        
        return view('pages.services', compact('services'));
    }
}
