<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\AccountSetup\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actions = array(
            ['name' => 'View', 'code' => ''],
            ['name' => 'Edit', 'code' => ''],
            ['name' => 'Update', 'code' => ''],
            ['name' => 'Delete', 'code' => ''],
            ['name' => 'Create', 'code' => ''],

        );

        $appModules = array('order-management');

        Permission::truncate();

        foreach($appModules as $appModule) {
            foreach($actions as $action) {
                Permission::create([
                    'app_module' => $appModule, 
                    'name' => $action['name'],  
                    'code' => !empty($action['code'])? $action['code']: strtolower(replace_space_with_dash($action['name']))
                ]);
            }
        }        
    }
}