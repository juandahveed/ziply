<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Children;

class ChildrenController extends Controller
{
    public function getChildren() {
        
        $children = Children::all();
        
        return view('pages.children', compact('children'));
    }
}
