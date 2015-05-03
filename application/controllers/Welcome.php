<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function login()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('login');
	}

	public function logout()
	{
		$this->load->view('logout');
	}

	public function memberAdd()
	{
		$this->load->helper('url');
		$this->load->view('add');
	}

	public function connectMember()
	{
		$this->load->view('connect');
	}

	public function memberUpdate()
	{
		$this->load->helper('url');
		$this->load->view('update');
	}

	public function memberIndex()
	{
		$this->load->helper('url');
		$this->load->view('welcome_member');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message');
	}

}
