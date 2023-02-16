<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
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
        return response()->json([
            'status' => true,
            'body' => $spots,
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
