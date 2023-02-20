<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Http\Resources\ConsultaitonResource;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ShowConsultationController extends Controller
{
    //
    public function index(){
        $consultation = Consultation::with('user')->when(request()->q, function($consultation){
            $consultation = $consultation->where('id', 'like', '%' . request()->q . '%');
        })->paginate(5);
        $name = User::with('user')->get();
        return new ConsultaitonResource(true, 'name', $consultation);
    }
}
