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

        $spots = Spot::with('spot')->where('region', $user->region)->leftJoin('vaccines', 'spots.id', '=', 'vaccines.spot_id')->get();
        return response()->json([
            'status' => true,
            'body' => $spots,
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
