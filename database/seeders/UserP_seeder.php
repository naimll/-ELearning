<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserP;
class UserP_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserP::create([
                'name'=>'Naim',
                'surname'=>'Llumnica',
                'email'=>'naim@gmail.com',
                'password'=>'12345',
            ]);
    }
}
