<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Equipment;

class EquipmentController extends Controller
{
    public function getEquipmentType()
    {
    	$equipmentTypes = Equipment::equipmentType()->get();
    	echo $equipmentTypes;
    }
    public function searhEquipment($type,$name='')
    {
    	$equipments = Equipment::type($type);
    	if(!empty($name))
    		$equipments->name($name);
    	$equipmentItems = $equipments->get();
    	echo $equipmentItems;
    }
}
