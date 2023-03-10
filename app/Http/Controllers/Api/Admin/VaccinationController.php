<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccinitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VaccinationController extends Controller
{
    //

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'Spot' => 'required',
            'Vaccine' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $vaccination = Vaccinitation::create([
            'Spot' => $request->Spot,
            'Vaccine' => $request->Vaccine,
            'status' => 'Vaccinated'
        ]);

        if($vaccination){
            return response()->json([
                'data' => $vaccination,
            ]);
        }
    }
}
