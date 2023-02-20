<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        $user = auth()->user();
            return response()->json([
                'id_card' => $user->id_card,
                'status' => $user->status,
                'name' => $user->name,
            ]);

    }
}
