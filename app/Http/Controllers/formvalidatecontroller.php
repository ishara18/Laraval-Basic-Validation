<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formvalidatecontroller extends Controller
{
    public function formvalidator(Request $request)
    {
        $validated = $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Email' => 'required',
            'NIC' => 'required',
            'Mobile_Number' => 'required',
        ]);

        //Rest of code
    }
}
