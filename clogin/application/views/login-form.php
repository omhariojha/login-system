<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
</head>
<body>
<?php
    if($this->session->userdata('username')!=null)
    {
    	$this->load->helper('url');
   echo "<h1> welcome   " . $this->session->userdata('username')."</h1>";
   echo "<a href='".base_url()."verify/logout'>Logout</a>"; 
}  
else
{
   echo "<h1>login form</h1>";
   $this->load->helper('form');

   echo form_open('verify/login');
   echo form_label('Username','username');
   echo form_input('username');
   echo '<br>';
   echo '<br>';

   echo form_label('Password','password');
   echo form_password('password');

   echo '<br>';

   echo form_submit('Submit','Login');

   
   echo form_close();

}

?>
</body>
</html>