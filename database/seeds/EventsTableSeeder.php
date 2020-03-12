<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->delete();

        Event::create(
	        	[
	        		'title' => 'Dance Event',
	        		'description' => "Happening in London",
	        		'location' => 'London',
	        		'categories' => 'Dance'
	        	]
        );
        Event::create(
	        	[
	        		'title' => 'Music Event',
	        		'description' => "Happening in Australia",
	        		'location' => 'Australia',
	        		'categories' => 'Music'
	        	]
	        );
        Event::create(
	        	[
	        		'title' => 'Drawing Event',
	        		'description' => "Happening in Paris",
	        		'location' => 'Paris',
	        		'categories' => 'Drawing'
	        	]
	        );
        Event::create(
	        	[
	        		'title' => 'Social Event',
	        		'description' => "Happening in India",
	        		'location' => 'India',
	        		'categories' => 'Social'
	        	]
	        );
        Event::create(
	        	[
	        		'title' => 'Singing Event',
	        		'description' => "Happening in Germany",
	        		'location' => 'Germany',
	        		'categories' => 'Singing'
	        	]
	        );
    }
}
