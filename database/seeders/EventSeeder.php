<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Events;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(database_path('events.sql'));
        DB::unprepared($sql);

        $eventsData = DB::table('events')->get();

        foreach ($eventsData as $event) {
            Events::create((array) $event);
        }
    }
}
