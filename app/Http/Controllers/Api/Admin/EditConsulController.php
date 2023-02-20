<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation;

class EditConsulController extends Controller
{
    //
    public function index(){
        $consultation = Consultation::all();
        return response()->json([
            "body" => $consultation
        ]);
    }

}
