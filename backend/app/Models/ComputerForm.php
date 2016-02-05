<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class ComputerForm extends Model
{ 
	protected $fillable = ['form_id', 'form_type','user_id'];
	protected $table = 'computer_form';
	/**
	 * [scopeNewFormID description]
	 * @param  [type] $query  [description]
	 * @param  [type] $filter [company,type,year]
	 * @return [type]         [description]
	 */
	public static function getNewFormID($filter)
	{
		$companyStrLength = strlen($filter['company']);
		$position = 11;
		if($companyStrLength ==2)
			$position = 10;

		$prefixID = 'RT';
		if($filter['type'] == 'Receive')
			$prefixID= 'AS';
		$newID = "CONCAT(
				'{$prefixID}',
				YEAR(CURDATE()),
				'-',
				'{$filter['company']}',
				LPAD(MAX(SUBSTR(form_id FROM {$position} FOR 3)+1),3,'0')) AS NewFormID";
		$sql="select {$newID} 
  					from computer_form 
  					where form_company = '{$filter['company']}' 
  					AND SUBSTR(form_id,3,4) = '{$filter['year']}'";
  		$form = DB::select($sql);

  		$newFormID=$form[0]->NewFormID;
  		if(empty($newFormID))
  			$newFormID= $prefixID.date('Y').'-'.$filter['company'].'001';
  		return $newFormID;
	}
}
