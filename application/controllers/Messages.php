<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller
{

    function __construct()
    {
        parent::__construct();


        $this->load->library('session');
    }

    public function index()
    {
    	if(isset($_POST['msg']))  //if they are posting a message
    	{
    		if($this->session->userdata('userID') != '')  //if they are logged in
    		{
    			$msg = $this->stripBadChars($_POST['msg']);

    			$queryResult = $this->db->query("insert into pluxxo.halo6_message (userID, message) values (" . $this->session->userdata('userID') . ",'" . $msg . "')");


    		}


    	}



        $queryResult = $this->db->query("SELECT forum.messageID, forum.message, forum.created, user.username FROM pluxxo.halo6_message AS forum
                                         LEFT JOIN pluxxo.halo6_user AS user
                                         ON forum.userID = user.userID
                                         ORDER BY forum.messageID DESC");

        $data['users'] = $queryResult->result_array();

        $this->load->view('messages_view', $data);
    }


	private function stripBadChars($inputvar)
	{
		$inputvar = str_replace("<", "", "$inputvar");
		$inputvar = str_replace("'", "", "$inputvar");
		$inputvar = str_replace("\"", "", "$inputvar");

		return ($inputvar);
	}

}
