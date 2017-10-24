<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reports_model extends CI_Model {       
	function __construct(){            
    parent::__construct();
    $this->load->database();
		$this->user_id =isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->id:'1';
	} 
	
	/**
      * This function is get table data by id
      * @param : $id is value of notes_id
      */
	public function Get_data_id($id='') {
		 $this->db->select('*');
		 $this->db->from('notes');
		 $this->db->where('notes_id' , $id);
		 $query = $this->db->get();
		 return $result = $query->row();
	}
	
	/**
      * This function is get data for front end datatable
      * @param : $con is where condition for select query
      */
/*	public function get_data($con=NULL) {
		$sql = "SELECT * FROM  `notes` LEFT JOIN `notes_category` ON (`notes_category`.`notes_category_id` = `notes`.`category_name`) LEFT JOIN `users` ON (`users`.`users_id` = `notes`.`tantou`) LEFT JOIN `item_status` ON (`item_status`.`item_status_id` = `notes`.`action_status`)  ";
		if($con != '') {
			$sql .= ' WHERE '.$con;	
		}
		log_message('debug',print_r($sql,TRUE)); 
		$qr = $this->db->query($sql);
		return $qr->result();
	}
*/

	public function get_data($con=NULL) {
		$sql = "SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a ";
		if($con != '') {
			$sql .= ' WHERE '.$con;	
		}

			$sql .= 'order by date,type ';	
		

		log_message('debug',print_r($sql,TRUE)); 
		$qr = $this->db->query($sql);
		return $qr->result();
	}

	/**
      * This function is used to delete record from table
      * @param : $id record id which you want to delete
      */
	public function delete_data($id='') {
		$this->db->where('notes_id', $id);
    	$this->db->delete('notes');
	}

	/**
      * This function is used to Insert Record in table
      * @param : $table - table name in which you want to insert record 
      * @param : $data - record array 
      */
	public function insertRow($table, $data){
	  	$this->db->insert($table, $data);
	  	return  $this->db->insert_id();
	}

	/**
      * This function is used to Update Record in table
      * @param : $table - table name in which you want to update record 
      * @param : $col - field name for where clause 
      * @param : $colVal - field value for where clause 
      * @param : $data - updated array 
      */
  	public function updateRow($table, $col, $colVal, $data) {
  		$this->db->where($col,$colVal);
		$this->db->update($table,$data);
		return true;
  	}
}?>