<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		
	}

	public function loadpage($page)
	{
		$this->load->view('common/headerView');
		$this->load->view('common/navbarmenuvideView');
		$this->load->view('pages/'.$page);
		$this->load->view('common/footerView');
	}

}
