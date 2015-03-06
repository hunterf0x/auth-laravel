<?php
/**
 * Created by PhpStorm.
 * User: hvaras
 * Date: 24-02-15
 * Time: 18:09
 */

class UserTableSeeder extends Seeder{
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'nombre'   => 'System',
            'apellido' => 'Administrator',
            'username' => 'Admin',
            'email'    => 'king.cold@gmail.com',
            'password' => Hash::make('123456')

        ]);
    }

}
