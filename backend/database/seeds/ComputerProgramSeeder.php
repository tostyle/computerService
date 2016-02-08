<?php

use Illuminate\Database\Seeder;
use App\Models\ComputerProgram;
class ComputerProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//License Program
        ComputerProgram::create(array(
        	'name' => 'Microsoft Windows',
        	'detail' => 'OS',
        	'version' => 'Win 7 Pro 32',
        	'type' => 'License',
        	'default' => 'Y'
        ));
        ComputerProgram::create(array(
        	'name' => 'Mail Client',
        	'detail' => 'รับส่งอีเมล์',
        	'version' => '',
        	'type' => 'License',
        	'default' => 'N'
        ));
        ComputerProgram::create(array(
        	'name' => 'Kaspersky',
        	'detail' => 'Anti virus',
        	'version' => '10',
        	'type' => 'License',
        	'default' => 'Y'
        ));
        ComputerProgram::create(array(
        	'name' => 'MS Office 2010',
        	'detail' => '2010',
        	'version' => '2010',
        	'type' => 'License',
        	'default' => 'Y'
        ));
        //Freeware Program
        ComputerProgram::create(array(
        	'name' => 'Libre Office',
        	'detail' => 'โปรแกรมสานักงาน',
        	'version' => '',
        	'type' => 'Freeware',
        	'default' => 'Y'
        ));
        ComputerProgram::create(array(
        	'name' => 'LEXiTRON',
        	'detail' => 'Dictionary',
        	'version' => '',
        	'type' => 'Freeware',
        	'default' => 'Y'
        ));
        ComputerProgram::create(array(
        	'name' => 'LEXiTRON',
        	'detail' => 'Dictionary',
        	'version' => '',
        	'type' => 'Freeware',
        	'default' => 'Y'
        ));
        ComputerProgram::create(array(
        	'name' => 'Adobe Reader',
        	'detail' => 'PDF Viewer',
        	'version' => '',
        	'type' => 'Freeware',
        	'default' => 'Y'
        ));
        ComputerProgram::create(array(
        	'name' => 'Adobe Reader',
        	'detail' => 'PDF Viewer',
        	'version' => '',
        	'type' => 'Freeware',
        	'default' => 'Y'
        ));
        ComputerProgram::create(array(
        	'name' => 'PDF Creator',
        	'detail' => 'PDF Viewer',
        	'version' => '',
        	'type' => 'Freeware',
        	'default' => 'Y'
        ));
        ComputerProgram::create(array(
        	'name' => 'Adobe Reader',
        	'detail' => 'PDF Viewer',
        	'version' => '',
        	'type' => 'Freeware',
        	'default' => 'Y'
        ));
        ComputerProgram::create(array(
        	'name' => '7Zip',
        	'detail' => 'zip',
        	'version' => '',
        	'type' => 'Freeware',
        	'default' => 'Y'
        ));
    }
}
