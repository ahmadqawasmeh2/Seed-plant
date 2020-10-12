<?php

use Illuminate\Database\Seeder;
use App\Models\admins;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admins::create(['name' => "Admin",
        'email' => "admin@gmail.com",
        'password' => bcrypt(123456789),
        'image' => "a.jpg"
    ]);
        
    }
}
