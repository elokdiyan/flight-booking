<?php
defined('BASEPATH') or exit('no direct script access');

	/**
	* 
	*/
	class carihome extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('rute_m');
			$this->load->model('reservation_m');
		}

		function index(){
			$data = new stdClass();
			$data->rute = $this->rute_m->gets()->result();

			$this->load->view('formsearch/vlanding', $data);
		}

		function search(){
			$data = new stdClass();
			$from = $this->input->get('departure');
			$to = $this->input->get('destination');
			$departat = $this->input->get('departat');

			$rutes = $this->reservation_m->cari_maskapai(array(
				'rute_from'=>$from,
				'rute_to'=>$to,
				'date'=>$departat
				));

			if($rutes->num_rows() > 0){
				$data->rutes = $rutes->result();
				$this->load->view('formsearch/services', $data);
			}else{
				$this->session->set_flashdata('error', 'Maaf rute yang dipilih tidak tersedia');
				$this->index();
			}
		}

		function pesan($id_transport, $id_rute){
			$data = new stdClass();

			$data->id_transport = $id_transport;
			$data->id_rute = $id_rute;

			$data->seat = $this->rute_m->gets_by_condition2('seat_qty', 'transportation', array('id'=>$id_transport))->result();
			$this->load->view('formsearch/pesan', $data);
		}

		function reservasi(){
			$id_transport = $this->input->post('idtransport');
			$id_rute = $this->input->post('idrute');

			$name = $this->input->post('nama');
			$address = $this->input->post('address');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$gender = $this->input->post('gender');
			$seat = $this->input->post('seat');

			$reservdate = date('Y-m-d');
			$reservcode = rand();
			$reservat = $this->rute_m->get_by_id($id_rute)->row_array();

			$departat = $this->rute_m->gets_by_conditions('depart_at', array('id'=>$id_rute))->row_array();
			$price = $this->rute_m->gets_by_conditions('price', array('id'=>$id_rute))->row_array();

			$customer = array(
				'name'=>$name,
				'address'=>$address,
				'phone'=>$phone,
				'gender'=>$gender,
				'email'=>$email
			);

			$this->Customer_m->add($customer);

			$customerid = $this->Customer_m->get_id_by_name($name)->row_array();

			$reservasi = array(
				'reservation_code'=>$reservcode,
				'reservation_at'=>$reservat['date'],
				'reservation_date'=>$reservdate,
				'seat_code'=>$seat,
				'customer_id'=>$customerid['id'],
				'rute_id'=>$id_rute,
				'depart_at'=>$departat['depart_at'],
				'price'=>$price['price'],
				'user_id'=>0
			);

			$this->reserve_m->add($reservasi);
		}

		function konfirmasi(){
			$this->load->view('formsearch/konfirmasi');
		}

		function about(){
			$this->load->view('formsearch/about');
		}

		function contact(){
			$this->load->view('formsearch/contact');
		}

		function services(){
			$this->load->view('formsearch/services');
		}
	}
?>