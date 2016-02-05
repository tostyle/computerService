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
        if(!empty($inputs['formID']))
            $formID = $inputs['formID'];
        print_r($inputs);exit;
        if( empty($formID) )
        {
        	$formID = ComputerForm::getNewFormID(array(
        		'company' => $inputs['receiveUser']['originalObject']['CompanyName'],
        		'type'    => $inputs['formType'],
        		'year'    => date('Y')
        	));
        	ComputerForm::create(array(
        		'form_id'   => $formID,
        		'form_type' => $inputs['formType'],
        		'user_id'   => $inputs['receiveUser']['originalObject']['UserID'],
        	));
        }
        ComputerFormEquipment::create(array(
        ));
    }
    public function updateReceiveForm(Request $request)
    {
    	$input = $request->all();
    }
}
