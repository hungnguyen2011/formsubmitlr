<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        DB::table('tbl_listuser')->insert([
        	'username'=>'hungnguyen',
        	'email'=>'hung@gmail.com',
        	'address'=>'thai binh'
        ]);
    }
}
