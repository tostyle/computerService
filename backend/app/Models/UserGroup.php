<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = 'user_group';
	protected $primaryKey = 'UGATID';
	public $timestamps = false;
    protected $connection = 'mysql2';
}
