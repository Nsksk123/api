<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccines;
use Illuminate\Http\Request;
use App\Models\Spot;
use App\Models\SpotDetail;

class SpotController extends Controller
{
    //
    public function index(){
        $spots = Spot::when(request()->q, function ($spots) {
            $spots = $spots->where('neme', 'like', '%' . request()->q . '%');

        })->first();
        $vaccines = Vaccines::with('vaccines')->when(request()->q, function($consultation){
            $consultation = $consultation->where('spot_id', 'like', '%' . request()->q . '%');
        })->latest()->paginate(10);
        return response()->json([
            'status' => true,
            'body' => $spots,
            'available_vaccination' => $vaccines,
        ], 200);
    }

    public function show($spot_id){
        $spots = SpotDetail::whereSpotId($spot_id)->first();

        if($spots){
            return response()->json([
                'body' => $spots,
            ]);
        }
    }
}
