<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'=>1,
            'name'=>'Ismail Mahaj',
            'email'=>'ismailmahaj@gmail.com',
            'password'=>'cocorico'

        ]);
        User::create([
            'id'=>2,
            'name'=>'El Bouhlali Salaheddine',
            'email'=>'el.salaheddine@hotmail.com',
            'password'=>'polopolo'

        ]);
    }
}