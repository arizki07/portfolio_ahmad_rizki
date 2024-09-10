<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ex = [
            [
                'tanggal' => '2024-01-01',
                'jobs' => 'test',
                'company' => 'test',
                'keterangan' => 'test',
            ],
        ];

        foreach ($ex as $e) {
            Experience::create($e);
        }
    }
}
