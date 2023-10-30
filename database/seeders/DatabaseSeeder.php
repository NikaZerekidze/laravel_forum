<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Thread;
use App\Models\Replay;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::transaction(function(){
            \App\Models\User::factory(10)->create();



            // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);

            Thread::factory()->count(50)->create();


//
             Thread::all()->each(function($thread){
                 Replay::factory()->count(10)->create([
                     "thread_id" => $thread
                 ]);
             });
//
//            Thread::withCount("replies")->get()->each(function($thread, $user){
//
//                if($thread->replays_count === 0) {
//                    Replay::factory()->count(10)->create([
//                        "thread_id" => $thread->id,
//                        "user_id" => $user->id
//                    ]);
//                }
//
//            });


        });



    }
}
