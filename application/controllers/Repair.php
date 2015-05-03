<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repair extends CI_Controller {

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

	public function sendRepair()
	{
		$this->load->helper('form');
		$this->load->view('sent_repair');
	}

	public function getRepair(){
		$this->load->helper('form');
		$this->load->view('get_repair');
	}

	public function completeRepair(){
		$this->load->helper('form');
		$this->load->view('complete_repair');
	}

	public function completeRepairSuccess(){
		$this->load->helper('url');
		$this->load->view('complete_repair_2');
	}

	public function deleteRecord(){
		$this->load->view('delete_record');
	}

	public function editRecord(){
		$this->load->helper('form');
		$this->load->view('edit_record');
	}

	public function editRecord2()
	{
		$this->load->helper('form');

		$queryBag['recID'] = $this->input->post('recID');

		$this->load->view('edit_record_2', $queryBag);
	}

	public function sentRepair2()
	{
		$queryBag['rep_getID'] = $this->input->post('rep_getID');
		$queryBag['roomID'] = $this->input->post('roomID');
		$queryBag['repContent'] = $this->input->post('repContent');
		$this->load->helper('url');

		$this->load->view('sent_repair_2', $queryBag);
	}


	public function cleanerRepair(){
		$this->load->helper('form');
		$this->load->view('get_repair_2');
	}

	public function cleanerRepairSuccess(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('get_repair_3');
	}


	
}
