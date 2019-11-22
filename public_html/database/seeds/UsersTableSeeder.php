<?php

use Carbon\Carbon;
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
        $data = [
            'name'      =>  'Администратор',
            'email'     =>  'test@email.ru',
            'password'  =>  bcrypt('password'),
            'created_at'=>  Carbon::now(),
            'updated_at'=>  Carbon::now()
        ];

        DB::table('users')->insert($data);
    }
}
