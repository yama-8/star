<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'ryoga',
                'email' => 'honoka1007@i.softbank.jp',
                'password' => '3417399Te',
            ],
            [
                'name' => 'saya',
                'email' => 'sayamikan@gmail.com',
                'password' => '3417399Te',
            ],
            [
                'name' => 'manaha',
                'email' => 'yokomana@i.softbankjp',
                'password' => '3417399Te',
            ]
        ]);
    }
}
