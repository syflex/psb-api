<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  user::create([
            'name' => 'Admin',
            'email' => 'admin@psb.com',
            'phone' => '07067822618',
            'password' => Hash::make('secret'),
            'address' => 'N011 Rahama Road, Highcost',            
            'is_admin' => true
        ]);
        
    }
}
