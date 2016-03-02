<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterUserController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$arrayValidName=array('trim','required','min_length[4]',array($this->user,'valid_username'));//Avec appel de la fonction de validation dans userModel



		$this->form_validation->set_rules('name', 'name',$arrayValidName);
    	$this->form_validation->set_rules('password', 'password','trim|required|min_length[4]|xss_clean|max_length[32]');
    	$this->form_validation->set_rules('passwordAgain', 'passwordAgain', 'trim|required|xss_clean|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			//S'il y a des erreurs sur la validation.  Rédirection à page d'enregistrement (route register qui ammène au controller registerController'

			redirect('register', 'refresh');
		}else
		{
			//Rédiriger vers une controller qui envoi vers la page login
			redirect('login', 'refresh');
		
		}
	}

	public function loadpage($page)
	{
		$this->load->view('common/headerView');
		$this->load->view('common/navbarmenuvideView');
		$this->load->view('pages/'.$page);
		$this->load->view('common/footerView');
	}

}
