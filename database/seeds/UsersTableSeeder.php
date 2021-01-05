<?php
use App\User;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)->create();

       /*User::create([
           'name'=>'Fernanda Modolo',
           'email'=>'fernanda.modolo@unesp.br',
           'password'=>bcrypt('123456')
       ]);*/
    }
}
