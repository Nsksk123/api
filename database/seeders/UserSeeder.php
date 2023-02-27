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
                DB::table('regions')->insert([
            [
                'province' => 'Jawa Tengah',
                'district' => "Tengaran",
            ],
            [
                'province' => 'Jawa Tengah',
                'district' => "Boyolali",
            ],
            [
                'province' => 'Jawa Tengah',
                'district' => "Ungaran",
            ],
            [
                'province' => 'Jawa Tengah',
                'district' => "Salatiga",
            ],
        ],
    );

        DB::table('users')->insert([
            [
            'name'      => 'Ismed',
            'password'  => Hash::make('1'),
            'id_card' => '11099',
            'born_date' => '17-05-06',
            'gender' => 'male',
            'address' => 'Wonosari',
            'status' => 1,
            'region' => "Tengaran"
            ],
            [
            'name'      => 'Natan',
            'password'  => Hash::make('1234'),
            'id_card' => '21098',
            'born_date' => '17-05-06',
            'gender' => 'male',
            'address' => 'Wonosari',
            'status' => 0,
            'region' => "Boyolali"
            ],
            [
            'name'      => 'Yohanes',
            'password'  => Hash::make('123'),
            'id_card' => '21097',
            'born_date' => '17-05-06',
            'gender' => 'male',
            'address' => 'Wonosari',
            'status' => 0,
            'region' => "Ungaran"
            ],
            [
            'name'      => 'Alpin',
            'password'  => Hash::make('12'),
            'id_card' => '21096',
            'born_date' => '17-05-06',
            'gender' => 'male',
            'address' => 'Wonosari',
            'status' => 0,
            'region' => "Salatiga"
            ],
        ]);

        DB::table('spots')->insert([
            [
            'name' => 'Joko Hospital',
            'address' => 'Jl. Gotong Royong',
            'serve' => '1|2|3',
            'capacity' => '15',
            'region' => "Salatiga",
            ],
            [
            'name' => 'Siti Hospital',
            'address' => 'Jl. Gotong Royong',
            'serve' => '1|2|3',
            'capacity' => '15',
            'region' => "Tengaran",
            ],
            [
            'name' => 'Yohanes Hospital',
            'address' => 'Jl. Gotong Royong',
            'serve' => '1|2|3',
            'capacity' => '15',
            'region' => "Tengaran",
            ],
            [
            'name' => 'Rizky Hospital',
            'address' => 'Jl. Gotong Royong',
            'serve' => '1|2|3',
            'capacity' => '15',
            'region' => "Ungaran",
            ],
            [
            'name' => 'Ismed Hospital',
            'address' => 'Jl. Gotong Royong',
            'serve' => '1|2|3',
            'capacity' => '15',
            'region' => "Ungaran",
            ],
            [
            'name' => 'Alpin Hospital',
            'address' => 'Jl. Gotong Royong',
            'serve' => '1|2|3',
            'capacity' => '15',
            'region' => "Ungaran",
            ],
            [
            'name' => 'natan Hospital',
            'address' => 'Jl. Gotong Royong',
            'serve' => '1|2|3',
            'capacity' => '15',
            'region' => "Boyolali",
            ],
            [
            'name' => 'ASD Hospital',
            'address' => 'Jl. Gotong Royong',
            'serve' => '1|2|3',
            'capacity' => '15',
            'region' => "Boyolali",
            ],
            [
            'name' => 'Purnama Hospital',
            'address' => 'Jl. Gotong Royong',
            'serve' => '1|2|3',
            'capacity' => '15',
            'region' => "Boyolali",
            ],
            [
            'name' => 'Purkidi Hospital',
            'address' => 'Jl. Gotong Royong',
            'serve' => '1|2|3',
            'capacity' => '15',
            'region' => "Boyolali",
            ],
        ]);

        // DB::table('spot_details')->insert([
        //     'vaccinations_count' => 12,
        //     'spot_id' => 1.
        // ]);

        DB::table('vaccines')->insert([
            [
                'nama_vaksin' => "Sinovac",
                'spot_id' => 10,
                'stock' => 0
            ],
            [
                'nama_vaksin' => "Astraveneca",
                'spot_id' => 10,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Moderna",
                'spot_id' => 10,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Pfizer",
                'spot_id' => 10,
                'stock' => 0
            ],
            [
                'nama_vaksin' => "Sinnopharm",
                'spot_id' => 10,
                'stock' => 150
            ],
            [
                'nama_vaksin' => "Sinovac",
                'spot_id' => 9,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Astraveneca",
                'spot_id' => 9,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Moderna",
                'spot_id' => 9,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Pfizer",
                'spot_id' => 9,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinnopharm",
                'spot_id' => 9,
                'stock' => 0
            ],
            [
                'nama_vaksin' => "Sinovac",
                'spot_id' => 8,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Astraveneca",
                'spot_id' => 8,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Moderna",
                'spot_id' => 8,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Pfizer",
                'spot_id' => 8,
                'stock' => 0
            ],
            [
                'nama_vaksin' => "Sinnopharm",
                'spot_id' => 8,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinovac",
                'spot_id' => 7,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Astraveneca",
                'spot_id' => 7,
                'stock' => 0
            ],
            [
                'nama_vaksin' => "Moderna",
                'spot_id' => 7,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Pfizer",
                'spot_id' => 7,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinnopharm",
                'spot_id' => 7,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinovac",
                'spot_id' => 6,
                'stock' => 0
            ],
            [
                'nama_vaksin' => "Astraveneca",
                'spot_id' => 6,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Moderna",
                'spot_id' => 6,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Pfizer",
                'spot_id' => 6,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinnopharm",
                'spot_id' => 6,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinovac",
                'spot_id' => 5,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Astraveneca",
                'spot_id' => 5,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Moderna",
                'spot_id' => 5,
                'stock' => 0
            ],
            [
                'nama_vaksin' => "Pfizer",
                'spot_id' => 5,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinnopharm",
                'spot_id' => 5,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinovac",
                'spot_id' => 4,
                'stock' => 0
            ],
            [
                'nama_vaksin' => "Astraveneca",
                'spot_id' => 4,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Moderna",
                'spot_id' => 4,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Pfizer",
                'spot_id' => 4,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinnopharm",
                'spot_id' => 4,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinovac",
                'spot_id' => 3,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Astraveneca",
                'spot_id' => 3,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Moderna",
                'spot_id' => 3,
                'stock' => 0
            ],
            [
                'nama_vaksin' => "Pfizer",
                'spot_id' => 3,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinnopharm",
                'spot_id' => 3,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinovac",
                'spot_id' => 2,
                'stock' => 0
            ],
            [
                'nama_vaksin' => "Astraveneca",
                'spot_id' => 2,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Moderna",
                'spot_id' => 2,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Pfizer",
                'spot_id' => 2,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinnopharm",
                'spot_id' => 2,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinovac",
                'spot_id' => 1,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Astraveneca",
                'spot_id' => 1,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Moderna",
                'spot_id' => 1,
                'stock' => 0
            ],
            [
                'nama_vaksin' => "Pfizer",
                'spot_id' => 1,
                'stock' => 15
            ],
            [
                'nama_vaksin' => "Sinnopharm",
                'spot_id' => 1,
                'stock' => 15
            ],
        ]);
    }
}
