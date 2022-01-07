<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\AccountSetup\Position;


class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = array([
            'name' => 'Watcher'
        ],[
            'name' => 'Admin',
        ]);

        Position::truncate();

        foreach($positions as $position) {
            // dd($position);
            Position::create($position);
        }
    }
}