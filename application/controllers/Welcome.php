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
	public function __construct()
	{
		parent::__construct();
		session_start();
	}

	public function login()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('login');
	}

	public function employeeLogin()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('employeeLogin');
	}

	public function logout()
	{
		$this->load->view('logout');
	}


	public function employeeLogout()
	{
		$this->load->view('employeeLogout');
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

	public function connectEmp()
	{
		$this->load->view('connectEmp');
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

	public function boss()
	{
		$this->load->helper('url');
		$this->load->view('boss');
		
	}
	public function counter()
	{
		$this->load->helper('url');
		$this->load->view('counter');
		
	}
	public function cleaner()
	{
		$this->load->helper('url');
		$this->load->view('cleaner');
		
	}

	public function memData()
	{
		$this->load->helper('url');
		$this->load->view('memData');
	}
	public function updateC($memId)
	{
		$this->load->helper('url');
		$data['memID'] = $memId;
		$this->load->view('updateC',$data);
	}
	public function delete($memId)
	{
		$this->load->helper('url');
		$data['memID'] = $memId;
		$this->load->view('delete',$data);
	}







	public function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message');
	}

}
