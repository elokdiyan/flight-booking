<?php
defined('BASEPATH') or exit('no direct script access');
/**
* 
*/
class Loginadmin extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	public function index()
	{
		# code...
		$this->load->view('vindex');
	}

	public function adduser()
	{
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		$fullname=$this->input->post('fullname');
		$level=$this->input->post('level');
		$datauser = array(
			'username' => $username,'password' => $password,'fullname' => $fullname,'level' => $level
			);
		$submitdata = $this->user_m->saveUser($datauser);
		if ($submitdata==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">data telah tersimpan</div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-success">data tidak tersimpan</div>');
		}
		redirect(base_url().'Loginadmin/tampilform');
	}

	public function tampilform()
	{
		$this->load->view('booking');
	}

	public function tampilpesanan()
	{
		$this->load->view('pesanan');
	}

		public function tampilcontact()
	{
		$this->load->view('contact');
	}

		public function tampilindex()
	{
		$this->load->view('index');
	}
}