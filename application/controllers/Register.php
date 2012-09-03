<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
{


	function __construct()
	{
		parent::__construct();

    }

    public function index()
	{
		if(isset($_POST['user']))  //if they submit a registration request
		{

			if(!isset($_POST['pass']) || !isset($_POST['pass2']) || !isset($_POST['email']) )
				$data['errormsg'] = "Error: You didn't fill out the form";

			else if(($_POST['user'] == '') || ($_POST['pass'] == '') || ($_POST['pass2'] == '') || ($_POST['email'] == ''))
				$data['errormsg'] = "Error: You didn't fill out the form";

			else if($_POST['pass'] != $_POST['pass2'])
				$data['errormsg'] = "Error: Passwords don't match";

			else if(preg_match("/[^a-zA-Z0-9]/", $_POST['user']))
				$data['errormsg'] = "Error: Username can't have special chars";

			else if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) == false)
				$data['errormsg'] = "Error: Invalid email";

			else
			{
				$user = $this->stripBadChars($_POST['user']);
				$pass1 = $this->stripBadChars($_POST['pass']);
				$pass2 = $this->stripBadChars($_POST['pass2']);
				$email = $this->stripBadChars($_POST['email']);

				$data['errormsg'] = "";

				$queryResult = $this->db->query("select username from pluxxo.halo6_user where lower(username)='" . strtolower($user) . "' OR lower(email)='" . strtolower($email) . "'");
				$matches = $queryResult->result_array();
				if(count($matches) > 0)
					$data['errormsg'] = "Error: Username or Email taken";

				else   //meets all requirements of being submitted
				{
					$actcode = rand (1,9999);


					$queryResult = $this->db->query("insert into pluxxo.halo6_user (username, password, email, act_code) values ('" . $user . "',SHA1('" . $pass1 . "'),'" . $email . "'," . $actcode . ")");
					if($this->db->affected_rows() < 1)  //if insert failed
						$data['errormsg'] = "Error: SQL insert error";

					else
					{
						$to = $email;
						$subject = "Pluxxo.com Activation Email";
						$message = "Hi.  You recently registered an account on pluxxo.com under the username " . $user . ".  Please click the following link to activate your account -> http://pluxxo.com/game/index.php?a=" . $actcode . "&u=" . $user;
						$from = "email@pluxxo.com";
						$headers = "From:" . $from;
						mail($to,$subject,$message,$headers);

						$data['success'] = 1;
					}
				}
			}

			$this->load->view('register_view', $data);

		}
		else
			$this->load->view('register_view');
	}

	private function stripBadChars($inputvar)
	{
		$inputvar = str_replace("<", "", "$inputvar");
		$inputvar = str_replace("'", "", "$inputvar");
		$inputvar = str_replace("\"", "", "$inputvar");

		return ($inputvar);
	}

}