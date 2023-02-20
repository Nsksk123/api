<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Consultation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ConsultationController extends Controller
{
    //
    public function index(){
        $user = auth()->user();
        $consultations = DB::table('consultations')->where('user_id', $user->id_card)->get()->first();

            return response()->json([
                'body' => $consultations,

            ]);

    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'disease_history' => 'required',
            'current_symptoms' => 'required',
            'user_id' => '',
            'name' => '',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $consultation = Consultation::create([
            'disease_history' => $request->disease_history,
            'current_symptoms' => $request->current_symptoms,
            'user_id' => $request->user_id,
            'name' => $request->name,
        ]);

        if($consultation){
            return response()->json([
                'message' => 'Request consultation sent successful',
            ], 200);
        }
        return response()->json([
            'message' => 'invalid'
        ], 400);
    }

    public function show($id){
        $society = Consultation::whereId($id)->first();

        if($society){
            return response()->json([
                'body' => $society,
            ], 200);
        }
    }

    public function update(Request $request, Consultation $consultation)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'doctor_notes' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //update category without image
        $consultation->update([
            'status' => $request->status,
            'doctor_notes' => $request->doctor_notes,
        ]);

        if($consultation) {
            //return success with Api Resource
            return response()->json([
                $consultation
            ]);
        }

        //return failed with Api Resource
        return response()->json([
            'message' => 'gagal menambahkan data'
        ]);
    }
}
