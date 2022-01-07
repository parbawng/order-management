<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GeneralSetup\ApplicationModule;

class ApplicationModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicationModule::truncate();

        ApplicationModule::create([
            'code' => 'order-management',
            'name' => 'Order Management',
        ]);

       
    }
}
