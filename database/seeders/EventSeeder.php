<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $events = [
        [
            'title'=>'event1',
            'start'=>'2021-07-30 21:16:15',
            'end'=>'2021-07-30 00:16:15'
        ],
        [
            'title'=>'event2',
            'start'=>'2021-08-15 21:16:15',
            'end'=>'2021-08-15 00:16:15'
        ],
        [
            'title'=>'event3',
            'start'=>'2021-09-15 21:16:15',
            'end'=>'2021-09-15 00:16:15'
        ],
        [
            'title'=>'event4',
            'start'=>'2021-10-15 21:16:15',
            'end'=>'2021-10-15 00:16:15'
        ],
        [
            'title'=>'event5',
            'start'=>'2021-11-15 21:16:15',
            'end'=>'2021-11-15 00:16:15'
        ],
        [
            'title'=>'event6',
            'start'=>'2021-12-15 21:16:15',
            'end'=>'2021-12-15 00:16:15'
        ],
        ];
        DB::table('events')->insert($events);
    }
}
