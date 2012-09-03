<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LobbyPanel extends CI_Controller
{


	function __construct()
	{
	parent::__construct();

	$this->load->library('session');
	}

    public function index()
	{

		$data['gameID'] = $_GET['game'];

		$queryResult = $this->db->query("select * from pluxxo.halo6_match where matchID=" . $data['gameID']);
		$data['gameInfo'] = $queryResult->result_array();

		$data['IsHost'] = false;

		if($this->session->userdata('userID') != '')   //if they are logged in, see if they created the game
		{
			$user = $this->session->userdata('userID');

			if($user == $data['gameInfo'][0]['hostID'])
			   $data['IsHost'] = true;
		}


		$this->load->view('lobbypanel_view', $data);
	}
}
