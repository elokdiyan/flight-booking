<?php
class Users extends CI_Controller{

	function index(){
		 $this->load->model('user_m');

		 $data['tbuser'] = $this->user_m->gets();

		 $this->load->view('user_data', $data);
	}
	function tambahuserlte(){
		$this->load->view('tambahuserlte');
	}
	function adduser()
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
		redirect(base_url().'Users/index');
	}
	function del($id){
		$this->load->model('user_m');
		// $id = $_GET['id'];
		$this->user_m->del($id);
	}
	function edit($d){}
	function detail($id){}
}