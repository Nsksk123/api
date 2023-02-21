<?php

namespace Database\Seeders;

use App\Models\Vaccines;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Region;
use App\Models\Spot;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name'      => 'kotans',
        //     'password'  => Hash::make('12'),
        //     'id_card' => '21097',
        //     'born_date' => '17-05-06',
        //     'gender' => 'male',
        //     'address' => 'Wonosari',
        //     'status' => 0,
        //     'region_id' => 1,
        // ]);

        // DB::table('doctors')->insert([
        //     'id_card' => '11099',
        //     'nama' => 'dr.Natan',
        //     'password' => '1234'
        // ]);

        // DB::table('spots')->insert([
        //     'name' => 'Purnawati Hospital',
        //     'address' => 'Jl. Gotong Royong',
        //     'serve' => '1|2|3',
        //     'capacity' => '15',
        //     'region_id' => 2,
        // ]);

        // DB::table('spot_details')->insert([
        //     'vaccinations_count' => 12,
        //     'spot' => Spot::all(),
        //     'spot_id' => 1.
        // ]);

        // DB::table('regions')->insert([
        //     'province' => 'Jawa Tengah',
        //     'district' => 'Tengaran',
        // ]);

        // DB::table('vaccines')->insert([
        //     'Sinovac' => 1,
        //     'Astrazenaca' => 0,
        //     'Moderna' => 1,
        //     'Pfizer' => 1,
        //     'Sinnopharm' => 0,
        //     'spot_id' => 1,
        // ]);

        //  DB::table('consultations')->insert([
        //      'status' => 'pending|accepted|rejected',

        //      'available_vaccines' => Spot::all(),
        //  ]);

         DB::table('vaccines')->insert([
            'nama_vaksin' => 'Sinnoparm',
            'spot_id' => 2,
         ]);
    }
}
