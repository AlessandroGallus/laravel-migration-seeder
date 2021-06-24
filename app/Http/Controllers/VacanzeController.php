<?php

namespace App\Http\Controllers;
use App\Vacanza;
use Illuminate\Http\Request;

class VacanzeController extends Controller
{
    public function index(){
        $vacanze = Vacanza::all();
        $data = ['vacanze' => $vacanze];
        return view('partials/home',$data);
    }
}
