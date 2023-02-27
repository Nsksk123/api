<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccines;
use Illuminate\Http\Request;
use App\Models\Spot;
use App\Models\SpotDetail;
use Illuminate\Support\Facades\DB;

class SpotController extends Controller
{
    //
    public function index(){
        $user = auth()->user();
        $region = $user->region;
        $spotId = Spot::where('region', $region)->pluck('id');

        $spots = Spot::select('*', \DB::raw('GROUP_CONCAT(vaccines.nama_vaksin SEPARATOR ",") as vaccines'))
        ->leftJoin('vaccines', 'spots.id', '=', 'vaccines.spot_id')
        ->groupBy('spots.id')->whereIn("spot_id", $spotId)->get();
        $vaccine = Vaccines::whereIn('spot_id', $spotId)->get();
        return response()->json([
            'status' => true,
            'body' => $spots,
            'vaccines' => $vaccine
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
