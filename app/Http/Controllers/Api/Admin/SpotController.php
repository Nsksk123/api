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
        $spotId = Spot::where('region', $region)->pluck('name');

        $spots = Spot::select('*', DB::raw('GROUP_CONCAT(vaccines.nama_vaksin SEPARATOR ",") as vaccines'))
        ->leftJoin('vaccines', 'spots.name', '=', 'vaccines.spot')
        ->groupBy('spots.name')->whereIn("spot", $spotId)->get();
        $vaccine = Vaccines::whereIn('spot', $spotId)->get();
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

    public function updateStock(Request $request){
        $vaccineId = $request->input('vaccine_id');
        $vaccine = Vaccines::where('id', $vaccineId)->decrement('stock', 1);

        return response()->json([
            'stock' => $vaccine
        ]);
    }
}
