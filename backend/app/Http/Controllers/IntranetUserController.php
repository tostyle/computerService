<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\IntranetUser;
use App\Models\UserGroup;

class IntranetUserController extends Controller
{
    public function findIntranetUserDetail($name)
    {
        $users = IntranetUser::name($name)
                    ->userGroup()
                    ->groupDB()
                    ->company()
                    ->selectUserDetail()
                    ->get();
    	echo $users;
    }
}
