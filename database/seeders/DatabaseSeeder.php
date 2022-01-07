<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ApplicationModuleSeeder::class);
        $this->call(DocumentSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(PermissionUserSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
