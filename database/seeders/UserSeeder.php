<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Ahmad Rizki',
                'email' => 'ahmadrizki0704@gmail.com',
                'password' => bcrypt('Rizki.123'),
                'birtday' => '2001-04-07',
                'alamat' => 'Blok Kavling Karanganyar Jamblang. Kec.Jamblang. Kabupaten Cirebon, RT.02/RW.01',
                'status' => 1,
            ],
        ];

        foreach ($user as $u) {
            User::create($u);
        }
    }
}
