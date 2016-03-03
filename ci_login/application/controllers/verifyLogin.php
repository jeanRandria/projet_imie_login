<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[4]|xss_clean|callback_check_name');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() == FALSE)
		{
			//S'il y a des erreurs sur la validation.  Rédirection à page de login

			$this->loadPage('loginView');

			//redirect('loginController', 'refresh');
		}else
		{
			//Rédiriger vers une controller qui envoi vers admin
			redirect('admin', 'refresh');
		}
	}

	public function check_database($password)
	{
		//Succès de la validation.  Faire une validation des données par rapport à la BDD
		$name = $this->input->post('name');//EN php $_POST['name'];

			 
		//Faire appel au model
		$result = $this->login->_login($name, $password);  
			   
		if($result) //test
		{
			//On crée la session (En PHP $_SESSION)
			$sess_array = array();//En PHP session_start()
			foreach($result as $row)
			{
			    $sess_array = array(
			        'id' => $row->id,
			         'name' => $row->name
			    );
			       
			    $this->session->set_userdata('logged_in', $sess_array);//On envoi dans session
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'name ou password incorrect');
			return false;
		}
	}

	public function check_name($name)
	{
		$this->form_validation->set_message('check_name', 'erreur sur name');
	}

	public function loadPage($page)
	{
		$this->load->view('common/headerView');
		$this->load->view('common/navbarmenuvideView');
		$this->load->view('pages/'.$page);
		$this->load->view('common/footerView');
	}

}