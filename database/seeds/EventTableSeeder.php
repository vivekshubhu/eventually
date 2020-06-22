<?php

use Illuminate\Database\Seeder;


class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// \Illuminate\Support\Facades\
    DB::table('events')->insert([
        [
        	'title' => 'reunite',
        	'start' => '2020-06-01 20:00:00',
        	'end' => '2020-06-2 20:00:00',
        	'color' => '00ad04',
        	'description' => 'reunite all mates'
        ],
        [
        	'title' => 'reminder',
        	'start' => '2020-06-03' ,
        	'end' => '2020-06-03',
        	'color' => '49382d',
        	'description' => 'reminder for all clients'
        ]
    ]);
		
    }
}
