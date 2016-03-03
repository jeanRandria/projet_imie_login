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
			$this->session->set_flashdata('valeurPasse',1);
			//S'il y a des erreurs sur la validation.  Rédirection à page d'enregistrement 
		
			redirect('register', 'refresh');
		}else
		{

			$name=$this->input->post('name');
			$password=MD5($this->input->post('password'));

			$data = array('name'=>$name, 'password'=>$password);

			//tester si False
			if (!($this->user->create_user($data))){
				$this->session->set_flashdata('valeurPasse',2);//Un setFlash permet de passer la valeur avant redirect vers une page (Disparait après)
				redirect('register','refresh');//si false pb enregistrement
			} else {
				
				redirect('login', 'refresh');//Rédiriger vers une controller qui envoi vers la page login
			}
		}
	}

	public function loadpage($page, $data)
	{
		$this->load->view('common/headerView');
		$this->load->view('common/navbarmenuvideView', $data);
		$this->load->view('pages/'.$page);
		$this->load->view('common/footerView');
	}

}
