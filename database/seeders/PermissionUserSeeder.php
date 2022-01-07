<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_users = array(
            array('id' => '1','user_id' => '1','permission_id' => '1'),
            array('id' => '2','user_id' => '1','permission_id' => '2'),
            array('id' => '3','user_id' => '1','permission_id' => '3'),
            array('id' => '4','user_id' => '1','permission_id' => '4'),
            array('id' => '4','user_id' => '1','permission_id' => '5'),
        );

        DB::table('permission_users')->truncate();

        foreach($permission_users as $permissionUser) {
            DB::table('permission_users')->insert([
                'user_id' => $permissionUser['user_id'],
                'permission_id' => $permissionUser['permission_id']
            ]);
        }        
    }
}