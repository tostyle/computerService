<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWindowLicenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('window_license', function (Blueprint $table) {
            $table->increments('id');
            $table->string('window_key');
            $table->string('window_bit');
            $table->string('window_type');
            $table->string('version');
            $table->string('lcnumber');
            $table->string('enabled');
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
         Schema::drop('window_license');
    }
}
