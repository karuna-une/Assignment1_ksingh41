<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        dd($users);
        return response()->json([
            'data' => $users,
            'message' => 'success',
            
        ],200);

    }

   
}
