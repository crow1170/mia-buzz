<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event extends CI_Controller {
	public function index($pass = 0){
		$this->debug($pass);
	}
	public function details($eventID = false){
                $this->load->library('tank_auth');
                $user_email = $this->tank_auth->get_user_email();
		$event = $this->_get_event($eventID);

//		print_r($event['mbapi'][0]);

                $this->load->view('header', array('user_email' => $user_email));
		$this->load->view('event-details', array('event' => $event));
		$this->load->view('footer');
	}
	public function debug($eventID = '2')
	{
		$event = $this->_get_event($eventID);
		print_r($event);
	}
	private function _get_event($eventID){
		if(!$eventID){return false;}
		$this->load->library('curl');
		$this->load->model('guide');
	
		$result = $this->guide->get('events', array('eventID' => $eventID), 1);
		$full_mbapi = json_decode($this->curl->simple_get('http://www.miamibeachapi.com/rest/index.php/events/search?page=1&rows=25&qry={"calendar_entry_id":'.$result['mbapi'].'}&token=1163463c8655f9d2a5f3c3ddb8a76c0b5ace18d5&token_secret=e1edbff84eb106a56021d8722348f4cd839f03d5'), true);
		$result['mbapi'] = $full_mbapi['events'][0];

		$this->load->library('tank_auth');
		$result['host'] = $this->tank_auth->get_user_email($result['userID']);

		return $result;
	}
//
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>
