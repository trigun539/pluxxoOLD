<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LastMessage extends CI_Controller
{


	function __construct()
	{
	parent::__construct();
	}

    public function index()
	{

		$gameID = 0;



		if(isset($_GET['gameID']))
			$gameID = $_GET['gameID'];


		$gameID = str_replace("<", "", $gameID);
		$gameID = str_replace("'", "", $gameID);
		$gameID = str_replace("\"", "", $gameID);


		$queryResult = $this->db->query("SELECT *
		FROM pluxxo.halo6_chat
		JOIN pluxxo.halo6_user
		ON pluxxo.halo6_chat.userID = pluxxo.halo6_user.userID
		WHERE pluxxo.halo6_chat.time >= NOW() - INTERVAL 1 HOUR
		AND GameID=" . $gameID .
		" ORDER BY pluxxo.halo6_chat.chatID desc
		LIMIT 8");

		$data['lastmsg'] = $queryResult->result_array();

		for($i=0; $i<count($data['lastmsg']); $i++)
		{
			if($data['lastmsg'][$i]['username'] == "Guest")
				$data['lastmsg'][$i]['username'] = "Guest" . $data['lastmsg'][$i]['GuestNum'];
		}


		$this->load->view('lastmessage_view', $data);
	}
}
