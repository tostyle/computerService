<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ComputerForm;
 ini_set('display_errors', 1);
 error_reporting(E_ALL);
class ComputerFormController extends Controller
{
    public function saveComputerForm(Request $request)
    {
    	$inputs = $request->all();
         $uri = $request->path();
         $path = explode('/', $uri);
         $formType= ucfirst($path[1]);
        if(!empty($inputs['formID']))
            $formID = $inputs['formID'];
        if( empty($formID) )
        {
        	$formID = ComputerForm::getNewFormID(array(
        		'company' => $inputs['receiveUser']['originalObject']['CompanyName'],
        		'type'    => $formType,
        		'year'    => date('Y')
        	));
        	ComputerForm::create(array(
        		'form_id'   => $formID,
        		'form_type' => $formType,
        		'user_id'   => $inputs['receiveUser']['originalObject']['UserID'],
        	));
        }
        ComputerFormEquipment::create(array(
            'computer_form_id' => $formID,
            'equipment_id' => $inputs['newEquipment']['originalObject']['id']
        ));
    }
    public function updateReceiveForm(Request $request)
    {
    	$input = $request->all();
    }
}
