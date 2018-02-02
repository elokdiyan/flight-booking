<?php
defined('BASEPATH') or exit('no direct script access');
/**
* 
*/
class edituser extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    # code...
  }

  function index($id){
    $data = new stdClass();
    $data->res = $this->user_m->get($id)->result();
    $this->load->view('vedituser', $data);
  }

  function edit($id){
    $id = $this->input->post('id');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $fullname = $this->input->post('fullname');
    $level = $this->input->post('level');

    $data_update = array(
      'id' => $id,
      'username' => $username,
      'fullname' => $fullname,
      'password' => $password,
      'level' => $level
    );

    $result = $this->user_m->update('user', $data_update, $id);

    if ($result==1) {
      #code...
      redirect('Users', 'refresh');
    }else{
      echo "Error";
    }
  }
}