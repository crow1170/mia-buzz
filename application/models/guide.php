<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Guide extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
function get($table,$where=array(),$single=FALSE) {
  $q = $this->db->get_where($table,$where);
  $result = $q->result_array();
  if($single) {
	if(!isset($result[0])){return false;}
    return $result[0];
  }
  return $result;
}
function insert($table,$data) {
  $this->db->insert($table,$data);
  return $this->db->insert_id();
}
 
function update($table,$where=array(),$data) {
  $this->db->update($table,$data,$where);
  return $this->db->affected_rows();
}
 
function delete($table,$where=array()) {
  $this->db->delete($table,$where);
  return $this->db->affected_rows();
}
function explicit($query) {
  $q = $this->db->query($query);
  if(is_object($q)) {
    return $q->result_array();
  } else {
    return $q;
  }
}
//
}
