<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupDB extends Model
{
    protected $table = 'groupdb';
	protected $primaryKey = 'GroupID';
	public $timestamps = false;
    protected $connection = 'mysql2';
}
