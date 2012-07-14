<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage extends CI_Controller
{

    var $haloDAO;  //data access object for the Halo db


	function __construct()
	{
		parent::__construct();


		$this->load->helper('url');
    }

    public function index()
	{
		$data['creator'] = "Mike Vogelman and Edwin Perez";

		$queryResult = $this->db->query("select * from epwhiz5_halo6.test_table where 1=1");
		$data['test_data'] = $queryResult->result_array();


		$this->load->view('frontpage_view', $data);
	}
}
