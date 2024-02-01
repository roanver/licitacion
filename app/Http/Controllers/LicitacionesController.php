<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Licitacion;

class LicitacionesController extends Controller
{
    public function index(){

        $licitaciones = Licitacion::All();

        return view('licitaciones', compact('licitaciones'));
    }

    public function import(){


    }

    public function export(){


    }
}
