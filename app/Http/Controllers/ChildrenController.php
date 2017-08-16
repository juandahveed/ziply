<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Children;

class ChildrenController extends Controller {

    public function getChildren() {

        $children = Children::all();

        return view('pages.children', compact('children'));
    }

    public function createChild(Request $request) {
        $child = new Children;

        $child->first_name = $request->first_name;
        $child->last_name = $request->last_name;
        $child->birthday = $request->birthday;
        $child->phone = $request->phone;
        $child->address = $request->address;
        $child->city = $request->city;
        $child->state = $request->state;
        $child->zip = $request->zip;
        $child->room_id = $request->room_id;
        
        dd($child);
        
        $child->save();
    }

}
