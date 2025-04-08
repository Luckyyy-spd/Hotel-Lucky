<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomType::truncate();
        $roomType = [
            [
                'name' => 'Standard Room',
                'price' => '200000',
                'facilities' => 'AC, TV',
                'information' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                'foto' => 'standard-room.jpg',
            ],
            [
                'name' => 'Superior Room',
                'price' => '300000',
                'facilities' => 'AC, TV, Refrigerator',
                'information' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                'foto' => 'superior-room.jpg',
            ],
            [
                'name' => 'Deluxe Room',
                'price' => '400000',
                'facilities' => 'AC, TV, Refrigerator, Wi-fi',
                'information' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                'foto' => 'deluxe-room.jpg',
            ],
        ];

        foreach ($roomType as $key => $value){
            RoomType::create($value);
        }
    }
}
