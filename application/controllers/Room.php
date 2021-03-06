<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model('room_model');
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('inquire_room');

	}

	// 查詢可訂房間
	public function inquireForm()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$queryBag['roomCapacity'] = $this->input->post('roomCapacity');
		$queryBag['roomPrice'] = $this->input->post('roomPrice');
		$queryBag['roomStyle'] = $this->input->post('roomStyle');
		$queryBag['date'] = $this->input->post('date');

		$data['resultSet'] = $this->room_model->getRoomStatus($queryBag);
		$data['date'] = $queryBag['date'];
		$this->load->view('inquire_room_success', $data);
	}

	// 查詢訂房紀錄
	public function roomRecord()
	{
		$this->load->library('table');
		$this->load->helper('url');
		$sessionID = $_SESSION['memID'];
		$data['resultSet'] = $this->room_model->getRoomRecord($sessionID);
		$this->load->view('inquire_room_record', $data);
	}

	// 員工專用訂房紀錄查詢
	public function inquireRoomRecord()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('binquire_room_record');
	}


	// 員工專用訂房紀錄查詢
	public function inquireRoomRecordSuccess()
	{
		$this->load->helper('url');
		$queryBag['roomCapacity'] = $this->input->post('roomCapacity');
		$queryBag['roomPrice'] = $this->input->post('roomPrice');
		$queryBag['roomStyle'] = $this->input->post('roomStyle');
		$queryBag['date1'] = $this->input->post('date1');
		$queryBag['date2'] = $this->input->post('date2');

		if(empty($queryBag['date1']))
		{
			$queryBag['date1'] = "1970-01-01";
		}

		if(empty($queryBag['date2']))
		{
			$queryBag['date2'] = "9999-12-31";
		}

		$data['resultSet'] = $this->room_model->getRoomRecordB($queryBag);
		$this->load->view('binquire_room_record_success', $data);
	}

	public function bookingRoom($id,$date)
	{
		$this->load->helper('url');
		$sessionID = $_SESSION['memID'];
		$recID = $this->room_model->setRecord($id, $sessionID,$date);

		redirect('/welcome/memberIndex');
	}


	public function editRecord()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view("edit_record");
	}

	public function editRecordSuccess()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view("edit_record_3");
	}

	public function deleteRecord()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view("delete_record");
	}

	public function deleteRecordSuccess()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view("delete_record_2");
	}


}
