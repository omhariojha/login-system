<?php
class Verify extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}
	public function login()
	{ 
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$answer= $this->user->user_verify($username,$password);

		if($answer)
		{   
		    $data = array(
				'username' => $answer[0]['username']
        );
			$this->session->set_userdata($data);

			echo "Login successfull";
    }
		else
		{ 
			echo "login credentials are wrong";
        }
    }
       public function logout()
    {
    	$this->session->unset_userdata('username');
    	echo "logout successfully";
    }
}
?>