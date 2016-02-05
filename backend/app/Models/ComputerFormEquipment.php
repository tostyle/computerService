<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComputerFormEquipment extends Model
{
    protected $fillable = ['computer_form_id', 'equipment_id'];
    protected $table = 'computer_form_equipment';
}
