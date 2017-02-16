<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'body' => 'This is db task 1',
        ]);
        DB::table('tasks')->insert([
            'body' => 'This is db task 2',
        ]);
        DB::table('tasks')->insert([
            'body' => 'This is db task 3',
        ]);
    }
}
