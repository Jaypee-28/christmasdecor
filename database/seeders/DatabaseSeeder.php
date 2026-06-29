<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Maxwell',
            'email' => 'maxwell@christmasdecoratingservice.com',
            'password' => bcrypt('Max!2680'),
        ]);

        $this->call([
            TemplateSeeder::class,
            ProspectSeeder::class,
        ]);
    }
}
