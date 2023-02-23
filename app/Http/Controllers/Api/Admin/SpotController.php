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
        $user = auth()->user();
        $region = $user->region;
        $spotId = Spot::where('region', $region)->pluck('id');

        $spots = Spot::where('region', $user->region)->get();
        $vaccine = Vaccines::whereIn('spot_id', $spotId)->get();
        return response()->json([
            'status' => true,
            'body' => $spots,
            'vaccine' => $vaccine,
            // 'available_vaccination' => $vaccines,
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
