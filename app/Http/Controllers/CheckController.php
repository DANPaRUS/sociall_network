<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckController extends Controller
{
    public function index(Request $request){
        return view('index-register' , ['data' => $request -> all()]);
    }
    public function register(Request $request){
        //
    } 
    public function login(Request $request){
        //
    }
}
