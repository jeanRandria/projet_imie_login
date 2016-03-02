<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	Class UserModel extends CI_Model
	{

		public function get_all_users()
		{
			return $this-> db -> get('tbl_user');

		}


		public function create_user($data)
		{
			if($this->db->insert('tbl_user',$data))
			{
				return $this->db->insert_id();
			} else {
				return false;
			}

		}

		public function update_user($id,$data)
		{
			$this->db->where('id', $id);

			if($this->db->update('tbl_user',$data)) {
				return true;
			} else {
				return false;
			}
		}

		public function get_user_details($id)
		{
			$this->db->where('id', $id);
			$result = $this->db->get('tbl_user');

			if($result) {
				return $result;
			} else {
				return false;
			}
		}

		public function get_user_details_by_name($name) 
		{

			$this->db->where('password', $name);
			$result = $this->db->get('tbl_user');

			if($result) {
				return $result;
			} else {
				return false;
			}

		}

		public function get_user_details_by_password($password) 
		{

			$this->db->where('password', $password);
			$result = $this->db->get('tbl_user');

			if($result) {
				return $result;
			} else {
				return false;
			}

		}



		public function delete_user($id) 
		{

			if($this->db-delete('tbl_user', array('id' => $id))) {
				return true;
			} else {
				return false;
			}
		}

		public function valid_username($name)
		{
			if($this->get_user_details_by_name($name) )
			{
				return true;
			} else {
				return false;
			}
		}



	}

