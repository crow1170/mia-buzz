<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Debug extends CI_Controller {
	public function index()
	{
		$this->load->driver('session');
		echo("debug");
	}
//
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>
