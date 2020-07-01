<?php
//Mengatur Register dan Welcome
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function halo_post(Request $request) {
        $first_name = $request["first_name"];
        return view('welcome', ['first_name' => $first_name]);
        
    }
    
}
