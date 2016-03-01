<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$this->load->helper('form');
	}

	public function index()
	{
		$this->loadpage('loginView');
		
	}

	public function loadpage($page)
	{
		$this->load->view('common/headerView');
		$this->load->view('pages/'.$page);
		$this->load->view('common/footerView');
	}

}
