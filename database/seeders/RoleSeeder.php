<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\AccountSetup\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array([
            'id' => 1,
            'name' => 'Super Admin',
            'description' => 'For setting up all setup data.'
        ],[
            'id' => 2,
            'name' => 'Admin',
            'description' => 'For enforcement section.'
        ]);

        Role::truncate();
        foreach($roles as $role) {
            Role::create($role);
        }
    }
}
