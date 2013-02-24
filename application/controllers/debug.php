<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Debug extends CI_Controller {
	public function index()
	{
		$this->load->library('curl');
		echo($this->curl->simple_get('http://www.miamibeachapi.com/rest/index.php/events/search?page=1&rows=25&qry={"calendar_entry_id":1149}&token=1163463c8655f9d2a5f3c3ddb8a76c0b5ace18d5&token_secret=e1edbff84eb106a56021d8722348f4cd839f03d5'));
	}
//
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>
