<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formviewcontroller extends Controller
{
    public function formview()
    {
        return view ('FormView');
    }
}
