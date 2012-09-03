<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MainPanel extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
    }

    public function index()
	{
		$queryResult = $this->db->query("select username, wins, losses, score from pluxxo.halo6_user order by score desc");
		$data['scores'] = $queryResult->result_array();

		$queryResult = $this->db->query("select * from pluxxo.halo6_match where started=0");  //get a list of all unstarted games
		$data['games'] = $queryResult->result_array();

		$this->load->view('mainpanel_view', $data);
	}
}
