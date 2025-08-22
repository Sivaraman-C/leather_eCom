<?php 
 defined('BASEPATH') OR exit('no direct script access allowed');
 /**
  * 
  */
 class AdminModel extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}


    public function userRegister()
{
    $Name       = $this->input->post('name');
    $Phone      = $this->input->post('phone');
    $Email      = $this->input->post('email');
    $Password   = $this->input->post('password');
    $Address    = $this->input->post('address');
    $City       = $this->input->post('city');
    $PostalCode = $this->input->post('postalcode');
    $Country    = $this->input->post('country');
    $State      = $this->input->post('state');

    if ($this->input->post()) {
        $checkAdmin = $this->db->query("SELECT * FROM register WHERE phone = '$Phone'");

        if ($checkAdmin->num_rows() > 0) {
            $_SESSION['activeAdmin'] = $Phone;
            echo "<script>alert('User with this number is already registered');window.location.href='".base_url('login')."'</script>";
        } else {
            $hashedPassword = password_hash($Password, PASSWORD_BCRYPT);

            $user_details = array(
                'name'       => $Name,
                'phone'      => $Phone,
                'mail'       => $Email, // make sure DB column is 'mail'
                'password'   => $hashedPassword,
                'address'    => $Address,
                'city'       => $City,
                'post_code'  => $PostalCode, // match DB column
                'country'    => $Country,
                'state'      => $State
            );

            $this->db->insert('register', $user_details);

            echo "<script>alert('Your registration was successful');window.location.href='".base_url('login')."'</script>";
        }
    }
}

}
?>