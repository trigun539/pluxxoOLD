<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->library('session');
    }

    public function index()
    {
        $queryResult = $this->db->query("SELECT forum.messageID, forum.message, forum.created, user.username FROM pluxxo.halo6_message AS forum
                                         LEFT JOIN pluxxo.halo6_user AS user
                                         ON forum.userID = user.userID
                                         ORDER BY forum.messageID DESC");

        $data['users'] = $queryResult->result_array();

        if($this->session->userdata('userID') != '')  //if they are logged in
        	$data['loggedin'] = 1;

        if(isset($_POST['message']) && strlen($_POST['message']) != 0 ){
            $queryString = "INSERT INTO pluxxo.halo6_message (message, userID, created) VALUES ('".addslashes($_POST['message'])."',1,'".date("Y/m/d")."')";
            $queryResult = $this->db->query($queryString);
            $data['messageAdded'] = "Message has been posted!";
        }

        $this->load->view('forum_view', $data);
    }



}
