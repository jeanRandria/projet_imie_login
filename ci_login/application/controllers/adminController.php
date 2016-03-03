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

          //recup type profil pour afficher bonne page
          $resultDataProfil= $this->user->get_user_details_by_name($data['name']); 
          // echo "<pre>";
          // print_r($resultDataProfil);
          // echo "</pre>";
          // die();

          foreach ($resultDataProfil as $object) {
              $object->profile;
          }
          
          if(($object->profile) == 1)
          {
            $this->loadPage('adminView', $data);
          } else {
            $this->loadPage('userView', $data);
          }
       }
       else
       {
          //si pas de session, redirectionàa la pege de login 
          redirect('login', 'refresh');
       }
   }

   
   function logout()
   {
     $sess_array = array();
     //$this->session->set_userdata('logged_in',$sess_array);//On envoi dans session
     $this->session->unset_userdata($sess_array);
     $this->session->sess_destroy();
     // session_destroy();
     redirect('login', 'refresh');
   }

   public function loadPage($page,$data)
   {
      $this->load->view('common/headerView');
      $this->load->view('common/navbarmenuView',$data);
      $this->load->view('pages/'.$page,$data);
      $this->load->view('common/footerView');
   }
 
}