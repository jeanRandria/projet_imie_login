<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class AdminController extends CI_Controller {
 
   function __construct()
   {
     parent::__construct();
   }
   
   public function index()
   {
       if($this->session->userdata('logged_in'))//Si la session existe
       {
          $session_data = $this->session->userdata('logged_in');
          $data['name'] = $session_data['name'];

          $this->loadPage('adminView', $data);
       }
       else
       {
          //si pas de session, redirectionàa la pege de login 
          redirect('login', 'refresh');
       }
   }

   
   function logout()
   {
     $this->session->unset_userdata('logged_in');
     session_destroy();
     redirect('home', 'refresh');
   }

   public function loadPage($page,$data)
   {
      $this->load->view('common/headerView');
      $this->load->view('pages/'.$page,$data);
      $this->load->view('common/footerView');
   }
 
}