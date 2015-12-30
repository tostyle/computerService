<?php

use Illuminate\Database\Seeder;
use App\Models\Equipment;
class equipment_type_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // DB::table('equipment')->delete();

        Equipment::create(array('equipmenttype' => 'PC'));
        Equipment::create(array('equipmenttype' => 'NB'));
        Equipment::create(array('equipmenttype' => 'Mouse'));
        Equipment::create(array('equipmenttype' => 'Bag'));
        Equipment::create(array('equipmenttype' => 'Charger'));
        Equipment::create(array('equipmenttype' => 'Monitor'));
        Equipment::create(array('equipmenttype' => 'Keyboard'));
    }
}
