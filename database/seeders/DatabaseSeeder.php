<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // DB::table('events')->insert([
        //     'event_name'      => 'test',
        //     'event_date'      => '2023-04-04',
        //     'event_time'      => '19:30:10',
        //     'event_desc'      => 'This is a test event',
        // ]);

        // DB::table('events')->insert([
        //     'event_name'      => 'Another Test',
        //     'event_date'      => '2023-03-06',
        //     'event_time'      => '22:15:20',
        //     'event_desc'      => 'we will see this',
        // ]);

        // DB::table('attendancelogs')->insert([
        //     'event_id'      => '1',
        //     'student_id'      => '123456',
        //     'student_name'      => 'Juan Cruz',
        //     'department'      => 'BSIT',
        //     'time_in'      => '16:30:10',
        // ]);

        // DB::table('attendancelogs')->insert([
        //     'event_id'      => '1',
        //     'student_id'      => '8458476',
        //     'student_name'      => 'John Doe',
        //     'department'      => 'Education',
        //     'time_in'      => '14:25:10',
        // ]);

        // DB::table('attendancelogs')->insert([
        //     'event_id'      => '2',
        //     'student_id'      => '478932467',
        //     'student_name'      => 'Lolita Cruz',
        //     'department'      => 'Law',
        //     'time_in'      => '03:12:05',
        // ]);

        // DB::table('attendancelogs')->insert([
        //     'event_id'      => '2',
        //     'student_id'      => '578931723',
        //     'student_name'      => 'Bob Sponge',
        //     'department'      => 'Business',
        //     'time_in'      => '17:19:12',
        // ]);

        DB::table('subs')->insert([
            'is_sub'        => '0'
        ]);
    }
}
