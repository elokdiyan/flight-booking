<?php
defined('BASEPATH') or exit('no direct script access');

	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		public function __construct(){
			parent::__construct();
		}

		public function index()
		{
			# code...

			if ($this->input->post('submit')) {
				# code...
				$username = strip_tags($this->input->post('username'));
				$password = strip_tags($this->input->post('password'));

				//var_dump($username, $password);

				$query = $this->db->query('Select * from user where `username` = "'.$username.'";');

				foreach ($query->result() as $row) {
					# code...
					$db_username = $row->username;
					$db_password = $row->password;
				}

				if ($db_username = $username && $db_password = $password){
					# code...
					redirect(base_url().'Loginadmin');
				}
			}

			$this->load->view('vLoginview');
		}
	}
	?>