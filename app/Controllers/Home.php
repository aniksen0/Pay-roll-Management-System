<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		helper("form");
	}

	public function index()
	{
		return view('dashboard_v');
	}
	public function employeeRegister()
	{
		$active=[];
		$active['active']=["active_menu_link"];
		return view("emp_reg",$active);
	}
}
