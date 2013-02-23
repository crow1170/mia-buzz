<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index()
	{
		$this->load->library('tank_auth');
		$user_email = $this->tank_auth->get_user_email();
		$this->load->view('header', array('user_email' => $user_email));
		$this->load->view('home');
	}
//
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>
