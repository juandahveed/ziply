<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomsController extends Controller
{
    public function getRooms(){
        
        $rooms = Room::all();
        
        return view('pages.rooms', compact('rooms'));
    }
}
