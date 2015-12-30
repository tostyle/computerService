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
    public function saveReceiveForm(Request $request)
    {
    	$input = $request->all();
    	$newFormID = ComputerForm::getNewFormID(array(
    		'company' => $input['receiveUser']['originalObject']['CompanyName'],
    		'type'    => 'Receive',
    		'year'    => date('Y')
    	));
    	ComputerForm::create(array(
    		'form_id' => $newFormID,
    		'form_type' => 'Receive',
    		'user_id' => $input['receiveUser']['originalObject']['UserID'],
    	));
    }
    public function updateReceiveForm(Request $request)
    {
    	$input = $request->all();
    }
}
