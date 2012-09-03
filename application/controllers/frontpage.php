<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage extends CI_Controller
{

    var $haloDAO;  //data access object for the Halo db


	function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
    }

    public function index()
	{

		if($this->session->userdata('guestNum') == '')  //session needs a guest id
			$this->session->set_userdata('guestNum', rand (0,999));

		$data['asd'] = "test";

		if(isset($_GET['a']) && isset($_GET['u']))  //if they are trying to activate
		{
			$act_code = $this->stripBadChars($_GET['a']);
			$user = $this->stripBadChars($_GET['u']);

			$queryResult = $this->db->query("update pluxxo.halo6_user set act_code=0 where act_code > 0 AND username='" . $user . "' AND act_code=" . $act_code);

			if($this->db->affected_rows() > 0)  //if the update happened [if the user+actcode was correct]
				$data['act_success'] = 1;

		}


		$this->load->view('frontpage_view', $data);
	}

	private function stripBadChars($inputvar)
	{
		$inputvar = str_replace("<", "", "$inputvar");
		$inputvar = str_replace("'", "", "$inputvar");
		$inputvar = str_replace("\"", "", "$inputvar");

		return ($inputvar);
	}
}
