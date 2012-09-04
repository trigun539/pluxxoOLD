session_start();

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PostMessage extends CI_Controller
{


	function __construct()
	{
	parent::__construct();

	$this->load->library('session');
	}

    public function index()
	{


		if(isset($_POST['msg']))
		{
		$msg = $_POST['msg'];
		$msg = str_replace("<", "", $msg);
		$msg = str_replace("'", "", $msg);
		$msg = str_replace("\"", "", $msg);

		$gameID = $_POST['gameID'];
		$gameID = str_replace("<", "", $gameID);
		$gameID = str_replace("'", "", $gameID);
		$gameID = str_replace("\"", "", $gameID);


		if($this->session->userdata('userID') != '')
		{
			$user = $this->session->userdata('userID');
			$guestNum = 0;
		}

		else
		{
			$guestNum = $this->session->userdata('guestNum');
			$user = 0;
		}


		$sql = "insert into pluxxo.halo6_chat (userID,GuestNum,GameID,message) values (" . $user . "," . $guestNum . "," . $gameID  . ",'" . $msg . "')";


		$queryResult = $this->db->query($sql);

		echo $sql;

		}

	}
}
