<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $queryResult = $this->db->query("SELECT forum.messageID, forum.message, forum.created, user.username FROM epwhiz5_halo6.halo6_message AS forum
                                         LEFT JOIN epwhiz5_halo6.halo6_user AS user
                                         ON forum.userID = user.userID
                                         ORDER BY forum.messageID DESC");

        $data['users'] = $queryResult->result_array();

        $this->load->view('messages_view', $data);
    }



}
