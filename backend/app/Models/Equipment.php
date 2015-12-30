<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipment';
    protected $connection = 'mysql';

    public function scopeEquipmentType($query)
    {
    	return $query->select('equipmenttype')->distinct();
    }
    public function scopeType($query,$type)
    {
    	return $query->where('equipmenttype','LIKE',"%{$type}%");
    }
    public function scopeName($query,$name)
    {
    	return $query->where('name','LIKE',"%{$name}%");
    }
}
