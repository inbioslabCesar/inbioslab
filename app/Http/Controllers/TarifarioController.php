<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarifarioController extends Controller
{
    public function show()
    {
        return view('examens/tarifario.tarifario');
    }
}
