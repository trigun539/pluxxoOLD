<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PostMessage extends CI_Controller
{


	function __construct()
	{
	parent::__construct();
	}

    public function index()
	{


		if(isset($_POST['msg']))
		{
		$msg = $_POST['msg'];
		$msg = str_replace("<", "", "$msg");
		$msg = str_replace("'", "", "$msg");
		$msg = str_replace("\"", "", "$msg");

		$user = 2;

		$queryResult = $this->db->query("insert into epwhiz5_halo6.halo6_chat (userID,message) values (" . $user . ",'" . $msg . "')");

		}

	}
}
