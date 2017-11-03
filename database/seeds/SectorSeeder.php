<?php

use Illuminate\Database\Seeder;
use App\Models\Sector;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sector::create([
            'name' => 'Manutenção',
            'description' => 'some description here'
        ]);

        Sector::create([
            'name' => 'Redes',
            'description' => 'some description here'
        ]);

        Sector::create([
            'name' => 'Sistemas',
            'description' => 'some description here'
        ]);
    }
}
