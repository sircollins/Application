<?php

use Illuminate\Database\Seeder;

class ApplicantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('applicants')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',

        ]);
    }
}
