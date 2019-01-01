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
        DB::table('users)->insert([
            ['fullname' => 'Lê Thanh Tùng'],
            ['password' => bcrypt(123456)],
            ['email' => 'lethanhtung2k5@gmail.com'],
        ]);
    }
}
