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
		$this->load->model('room_model');
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('inquire_room');

	}

	// 查詢可訂房間
	public function inquireForm()
	{
		$this->load->library('table');

		$queryBag['roomCapacity'] = $this->input->post('roomCapacity');
		$queryBag['roomPrice'] = $this->input->post('roomPrice');
		$queryBag['roomStyle'] = $this->input->post('roomStyle');
		$queryBag['date'] = $this->input->post('date');

		$data['resultSet'] = $this->room_model->getRoomStatus($queryBag);
		$table['table'] = $this->table->generate($data['resultSet']);
		$this->load->view('inquire_room_success', $table);

		// $this->load->view('inquire_room_success', $data);
	}

	// 查詢訂房紀錄
	public function roomRecord()
	{
		$this->load->library('table');

		$sessionID = "1"; //暫時寫死

		$data['resultSet'] = $this->room_model->getRoomRecord($sessionID);
		$table['table'] = $this->table->generate($data['resultSet']);
		$this->load->view('inquire_room_record', $table);
	}

	// 員工專用訂房紀錄查詢
	public function inquireRoomRecord()
	{
		$this->load->helper('form');
		$this->load->view('binquire_room_record');
	}


	// 員工專用訂房紀錄查詢
	public function inquireRoomRecordSuccess()
	{
		$this->load->library('table');

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
		$table['table'] = $this->table->generate($data['resultSet']);
		$this->load->view('inquire_room_success', $table);
	}
}
