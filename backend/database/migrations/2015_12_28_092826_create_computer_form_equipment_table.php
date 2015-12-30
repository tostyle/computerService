<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputerFormEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_form_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('computer_form_id');
            $table->string('form_type');
            $table->string('equipment_id');
            $table->string('quantity');
            $table->string('defect');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('computer_form_equipment');
    }
}
