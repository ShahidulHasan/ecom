<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
	function __construct() {
		$this->tableName = 'user';
		$this->primaryKey = 'id';
	}
	public function checkUser($data = array()){

		$this->db->select($this->primaryKey);
		$this->db->from($this->tableName);
		$this->db->where(array('email'=>$data['email']));
		$prevQuery = $this->db->get();
		$prevCheck = $prevQuery->num_rows();
		
		if($prevCheck > 0){
			$prevResult = $prevQuery->row_array();
            $data['update_date'] = date("Y-m-d H:i:s");
			$update = $this->db->update($this->tableName,$data,array('id'=>$prevResult['id']));
			$userID = $prevResult['id'];
		}else{
            $data['create_date'] = date("Y-m-d H:i:s");
            $data['update_date'] = date("Y-m-d H:i:s");
			$insert = $this->db->insert($this->tableName,$data);
			$userID = $this->db->insert_id();
		}

		return $userID?$userID:FALSE;
    }
}
