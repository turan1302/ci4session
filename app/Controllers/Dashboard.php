<?php 

namespace App\Controllers;

class Dashboard extends BaseController
{

	public $viewFolder;

	public function __construct(){

		$this->viewFolder="dashboard";

	}

	public function index()
	{

		return view("{$this->viewFolder}/index");
	}

}
