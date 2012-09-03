<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginTest extends CI_Controller
{


	function __construct()
	{
	parent::__construct();
	
	$this->load->library('session');
	}

    public function index()
	{
		if(isset($_POST['user'])&&isset($_POST['pass']))
		{
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$user = str_replace("<", "", "$user");
		$user = str_replace("'", "", "$user");
		$user = str_replace("\"", "", "$user");
		$pass = str_replace("<", "", "$pass");
		$pass = str_replace("'", "", "$pass");
		$pass = str_replace("\"", "", "$pass");

		$queryResult = $this->db->query("select * from epwhiz5_halo6.halo6_user where username='" . $user . "' and password ='" . $pass . "'");
		$data['userinfo'] = $queryResult->result_array();

			if(count($data['userinfo']) > 0)  //if the login works
			{
				$this->session->set_userdata('userID', $data['userinfo'][0]['userID']);
				echo $this->session->userdata('userID');
			}
			else
				$this->load->view('loginfail_view');

		}
		else  //user or pass not entered, show fail
			$this->load->view('loginfail_view');
	}
}
