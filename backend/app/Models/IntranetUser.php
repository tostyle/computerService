<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserGroup;
class IntranetUser extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'UserID';
	public $timestamps = false;
    protected $connection = 'mysql2';

    public function scopeName($query,$name)
    {
    	return $query->where('user.User_NameT', 'LIKE', "%{$name}%")
                    ->orWhere('user.SurNameT', 'LIKE', "%{$name}%")
                    ->orWhere('user.ShortName', 'LIKE', "%{$name}%")
                    ->orWhere('user.User_NameE', 'LIKE', "%{$name}%")
                    ->orWhere('user.SurNameE', 'LIKE', "%{$name}%");
    }
    public function scopeSelectUserDetail($query)
    {
        return $query->select(
                    'user.UserID', 
                    'user.IDNo',
                    'user.User_NameT',
                    'user.SurNameT',
                    'user.TelExt',
                    'user.ShortName',
                    'groupdb.Name AS GroupName',
                    'company.ShortName AS CompanyName'
        );
    }
    public function scopeUserGroup($query)
    {
    	return $query->join('user_group', function($join){
             $join->on('user_group.UserID','=', 'user.UserID');
        })->where('user_group.Default','=','Y');
    }
    public function scopeGroupDB($query)
    {
        return $query->join('groupdb', 'user_group.GroupID','=', 'groupdb.GroupID');
    }
    public function scopeParentGroupDB($query)
    {
        return $query->join('groupdb AS parent_group', 'parent_group.GroupID','=', 'groupdb.ParentID');
    }
    public function scopeCompany($query)
    {
        return $query->join('company', 'company.ComID','=', 'groupdb.ComID');
    }
    public function userGroup(){
    	return $this->hasOne('App\Models\UserGroup', 'UserID', 'UserID');
    }
    public function getUserGroup(){
    	return UserGroup::where('UserID', $this->UserID)
			->where('Default', 'Y');
    }
}
