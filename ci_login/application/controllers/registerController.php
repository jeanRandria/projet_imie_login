<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['valPasseAuView']=0;
		if($this->session->flashdata('valeurPasse'))
		{
			$data['valPasseAuView']=$this->session->flashdata('valeurPasse');
		}

		$this->loadpage('registerView',$data);
		
	}

	public function loadpage($page,$data)
	{
		$this->load->view('common/headerView');
		$this->load->view('common/navbarmenuvideView');
		$this->load->view('pages/'.$page,$data);
		$this->load->view('common/footerView');
	}

}
