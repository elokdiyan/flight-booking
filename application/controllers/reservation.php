<?php
/**
* 
*/
class reservation extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('m_cari');
		$this->load->model('m_data');
		$this->load->model('reservation_m');
		$this->load->helper('date');
	}

	function index(){
		$this->load->view('formtiket');
	}
	function prosestambah(){
		$name = $this->input->post('name');
		$phoneno = $this->input->post('phoneno');
		$email = $this->input->post('email');
		$reservationcode = $this->input->post('reservationcode');
		$reservationat = date('Y-m-d');
		$reservationdate = date('Y-m-d', strtotime($this->input->post('reservationdate')));
		$seatcode = $this->input->post('seatcode');
		$customerid = $this->input->post('customerid');
		$ruteid = $this->input->post('ruteid');
		$departat = $this->input->post('departat');
		$price = $this->input->post('price');
		$userid = $this->input->post('userid');
		$dataproses = array(
			'reservation_code'=>$reservationcode,
			'reservation_at'=>$reservationat,
			'reservation_date'=>$reservationdate,
			'seat_code'=>$seatcode,
			'customer_id'=>$customerid,
			'rute_id'=>$ruteid,
			'depart_at'=>$departat,
			'price'=>$price,
			'user_id'=>$userid
			);
		$this->reservation_m->add($dataproses);
	}

	function search()
	{
		$rute_from = $this->input->get('rute_from');
		$rute_to = $this->input->get('rute_to');
		$depart_at = $this->input->get('depart_at');
		$s = array(
			'rute_from'=>$rute_from,
			'rute_to'=>$rute_to,
			'depart_at'=>$depart_at
			);
		$data['tb_rute']  = $this->m_cari->search($s)->result();
		$data['rute']= $this->m_data->tampil_data_rute()->result();
		$this->load->view('v_hasil_pencarian',$data);
	}

	function tampildata()
	{
		$data['reservation'] = $this->reservation_m->gets()->result();
		$this->load->view('tampil_reservation',$data);
	}

	function editdata($id)
	{
		$data['editdata'] = $this->reservation_m->edit($id)->result();
		$this->load->view('veditreservation',$data);
	}

	function hapusreservation($id)
	{
		$this->reservation_m->delete($id);
		redirect('reservation');
	}

	function editproses()
	{
		$id = $this->input->post('id');
		$reservationcode = $this->input->post('reservationcode');
		$reservationat = date('Y-m-d');
		$reservationdate = date('Y-m-d', strtotime($this->input->post('reservationdate')));
		$seatcode = $this->input->post('seatcode');
		$customerid = $this->input->post('customerid');
		$ruteid = $this->input->post('ruteid');
		$departat = $this->input->post('departat');
		$price = $this->input->post('price');
		$userid = $this->input->post('userid');
		$dataproses = array(
			'reservation_code'=>$reservationcode,
			'reservation_at'=>$reservationat,
			'reservation_date'=>$reservationdate,
			'seat_code'=>$seatcode,
			'customer_id'=>$customerid,
			'rute_id'=>$ruteid,
			'depart_at'=>$departat,
			'price'=>$price,
			'user_id'=>$userid
			);
		$this->reservation_m->update($id, $dataproses);
		redirect('reservation/tampildata');
	}
}