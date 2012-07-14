<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TopScores extends CI_Controller
{


	function __construct()
	{
		parent::__construct();

    }

    public function index()
	{
	
		$queryResult = $this->db->query("select username, wins, losses, score from epwhiz5_halo6.halo6_user order by score desc");
		$data['scores'] = $queryResult->result_array();
		
	
		$this->load->view('topscores_view', $data);
	}
}