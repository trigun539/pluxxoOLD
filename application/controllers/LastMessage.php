<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LastMessage extends CI_Controller
{


	function __construct()
	{
	parent::__construct();
	}

    public function index()
	{

		$queryResult = $this->db->query("SELECT *
FROM epwhiz5_halo6.halo6_chat
JOIN epwhiz5_halo6.halo6_user
ON epwhiz5_halo6.halo6_chat.userID = epwhiz5_halo6.halo6_user.userID
ORDER BY chatID desc
LIMIT 5");
		$data['lastmsg'] = $queryResult->result_array();

		$this->load->view('lastmessage_view', $data);
	}
}
