<?php
namespace Database\Seeders;
use App\Models\AccountSetup\RoleUser;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();

        $users = array(
            array('id' => '1','name' => 'Super Admin','login_id' => 'superadmin','email' => 'superadmin@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$qGgKosV68mbvjUQvcnwoAeCDod.UKmBfhAdRu7f3zcYHp3wq/7N5C','ip' => NULL,'login_status' => 'logged_in','status' => 'active','status_reason' => NULL,'log_counter' => '15','remember_token' => NULL,'created_at' => NULL,'updated_at' => '2021-09-27 22:52:09'),
            array('id' => '2','name' => 'Admin 1','login_id' => 'admin1','email' => 'admin1@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$CA3RfP3iwSLioECatGqEBO29pxjHc55lnxJKjXaUxdejDX/0o7SUm','ip' => NULL,'login_status' => 'logged_out','status' => 'active','status_reason' => NULL,'log_counter' => '10','remember_token' => NULL,'created_at' => '2021-07-26 21:04:04','updated_at' => '2021-09-27 16:53:04'),
            array('id' => '3','name' => 'Admin 2','login_id' => 'admin2','email' => 'admin2@gmail.colm','email_verified_at' => NULL,'password' => '$2y$10$md8x84qnG9rCkfp2INOLxO6YlRrxtyMpVNqeYwJnYQrg2dqGZPnUa','ip' => NULL,'login_status' => 'logged_out','status' => 'active','status_reason' => NULL,'log_counter' => '14','remember_token' => NULL,'created_at' => '2021-07-27 21:39:23','updated_at' => '2021-09-27 18:44:14'),
            array('id' => '4','name' => 'Admin 3','login_id' => 'admin3','email' => 'admin3@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$Z4u91yqXPHA7LGwYuOOQte8obxESmhlTiZY0Is8/OhKLlZZuYQYg.','ip' => NULL,'login_status' => 'logged_in','status' => 'active','status_reason' => NULL,'log_counter' => '27','remember_token' => NULL,'created_at' => '2021-07-29 09:29:05','updated_at' => '2021-09-27 18:51:29'),
            
        );
        
        User::truncate();

        foreach($users as $user) {
            User::create($user);
        }

        $roleUsers = array(
            array('id' => '1','user_id' => '1','role_id' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','user_id' => '2','role_id' => '2','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','user_id' => '3','role_id' => '2','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','user_id' => '4','role_id' => '2','created_at' => NULL,'updated_at' => NULL),
        );

        RoleUser::truncate();

        foreach($roleUsers as $roleUser) {
            RoleUser::create($roleUser);
        }

        \Schema::enableForeignKeyConstraints();
    }
}
