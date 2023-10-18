<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructionController extends Controller
{
    public function instruction(){
        return view('instruction.instructions');
    }
    public function user(){
        return view('instruction.users');
    }
}
