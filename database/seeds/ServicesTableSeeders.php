<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServicesTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'id'=>1,
            'service'=>'location de salle'

        ]);
        Service::create([
            'id'=>2,
            'service'=>'traiteur'
        ]);
    }
}
