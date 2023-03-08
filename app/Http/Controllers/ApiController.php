<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function users(Request $request){
        $users = User::get();
        return response()->json($users, status:200);
    }

    public function login(Request $request){
        
    }
}
