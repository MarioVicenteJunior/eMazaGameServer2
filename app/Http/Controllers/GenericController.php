<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function landing (Request $REQUEST){
        return view (view: 'landing');
    }

}
