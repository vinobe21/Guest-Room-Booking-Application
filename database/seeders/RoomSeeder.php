<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $values=[
            [
            'room_number'=>'J101',
            'capacity'=>'5',
            'room_name'=>'Jhon House 1 Room 1',
            'room_rate'=>'5000/day',
            'time'=>'min 1 day, max 30 days',
            'description'=>'Best maintenance rooms available hear..'
        ],
        [
            'room_number'=>'J102',
            'capacity'=>'4',
            'room_name'=>'Jhon House 1 Room 2',
            'room_rate'=>'4000/day',
            'time'=>'min 1 day, max 30 days',
            'description'=>'Best maintenance rooms available hear..'
        ],
        [
            'room_number'=>'A101',
            'capacity'=>'6',
            'room_name'=>'Andrew House 1 Room 1',
            'room_rate'=>'6000/day',
            'time'=>'min 1 day, max 14 days',
            'description'=>'Best maintenance rooms available hear..'
        ],
        [
            'room_number'=>'A102',
            'capacity'=>'7',
            'room_name'=>'Andrew House 1 Room 2',
            'room_rate'=>'7000/day',
            'time'=>'min 1 day, max 14 days',
            'description'=>'Best maintenance rooms available hear..'
        ],
        [
            'room_number'=>'A201',
            'capacity'=>'4',
            'room_name'=>'Andrew House 2 Room 1',
            'room_rate'=>'4000/day',
            'time'=>'min 1 day, max 14 days',
            'description'=>'Best maintenance rooms available hear..'
        ],
        [
            'room_number'=>'A202',
            'capacity'=>'5',
            'room_name'=>'Andrew House 2 Room 2',
            'room_rate'=>'5000/day',
            'time'=>'min 1 day, max 14 days',
            'description'=>'Best maintenance rooms available hear..'
        ],
        [
            'room_number'=>'A203',
            'capacity'=>'10',
            'room_name'=>'Andrew House 2 Room 3',
            'room_rate'=>'10000/day',
            'time'=>'min 1 day, max 14 days',
            'description'=>'Best maintenance rooms available hear..'
        ]
        ];
        DB::table('rooms')->insert($values);
    
    }
}
