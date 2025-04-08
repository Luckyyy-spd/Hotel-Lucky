<?php

namespace Database\Seeders;

use App\Models\HotelFacility;
use Illuminate\Database\Seeder;

class HotelFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelFacility::truncate();
        $facilityRoom = [
            [
                'facility_name' => 'Swimming Pool',
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
            ],
            [
                'facility_name' => 'Gym',
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
            ],
            [
                'facility_name' => 'Sauna',
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
            ],
            [
                'facility_name' => 'Caffe In Hotel',
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
            ],
            [
                'facility_name' => 'Toy Museum',
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
            ],
            [
                'facility_name' => 'Sport Area',
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
            ],

        ];

        foreach ($facilityRoom as $key => $value){
            HotelFacility::create($value);
        }
    }
}
