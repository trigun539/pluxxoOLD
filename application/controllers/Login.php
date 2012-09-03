<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
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

		$queryResult = $this->db->query("select * from pluxxo.halo6_user where username='" . $user . "' AND password =SHA1('" . $pass . "') AND act_code=0");
		$data['userinfo'] = $queryResult->result_array();

			if(count($data['userinfo']) > 0)  //if the login works
			{
				$this->session->set_userdata('userID', $data['userinfo'][0]['userID']);
				$this->session->set_userdata('userName', $data['userinfo'][0]['username']);
				$this->load->view('myaccount_view', $data);
			}
			else
			{
				$data['loginfailure'] = 1;
				$this->load->view('login_view', $data);
			}

		}
		else if(isset($_POST['logout']))  //user is logging out
		{
			$this->session->unset_userdata('userID');
			$this->session->unset_userdata('userName');
			$data['loginfailure'] = 0;
			$this->load->view('login_view', $data);
		}
		else if($this->session->userdata('userID') != '')  //if they are already logged in
		{
			$queryResult = $this->db->query("select * from pluxxo.halo6_user where userID=" . $this->session->userdata('userID'));
			$data['userinfo'] = $queryResult->result_array();

			$this->load->view('myaccount_view', $data);
		}
		else  //user or pass not entered, show nothing
		{
			$data['loginfailure'] = 0;
			$this->load->view('login_view', $data);
		}
	}
}
