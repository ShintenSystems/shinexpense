<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Monthly_contribution_model extends CI_Model {       
	function __construct(){            
    parent::__construct();
    $this->load->database();
		$this->user_id =isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->id:'1';
	} 
	
	/**
      * This function is get table data by id
      * @param : $id is value of monthly_contribution_id
      */
/*	public function Get_monthly_contribution_id($id='') {
		 $this->db->select('*');
		 $this->db->from('monthly_contribution');
		 $this->db->where('monthly_contribution_id' , $id);
		 $query = $this->db->get();
		 return $result = $query->row();
	}
*/

		/**
      * This function is get table data by id
      * @param : $id is value of income_id
      */
	public function Get_data_id($id='') {
		 $this->db->select('*');
		 $this->db->from('monthly_contribution');
		 $this->db->where('monthly_contribution_id' , $id);
		 $query = $this->db->get();
		 return $result = $query->row();
	}


		/**
      * This function is get data for front end datatable
      * @param : $con is where condition for select query
      */
/*
	public function get_data_cat($con='') {
		$sql = "SELECT * FROM  `monthly_contribution`";
		if($con != '') {
			$sql .= ' WHERE '.$con;	
		}
		$qr = $this->db->query($sql);
		return $qr->result();
	}
	
*/
	/**
      * This function is get data for front end datatable
      * @param : $con is where condition for select query
      */
	public function get_data($con=NULL) {
		$sql = "SELECT * FROM  `monthly_contribution` LEFT JOIN `users` ON (`users`.`users_id` = `monthly_contribution`.`member_name`) LEFT JOIN `income_category` ON (`income_category`.`income_category_id` = `monthly_contribution`.`category_id`)";
		//$sql = "SELECT * FROM  `monthly_contribution`";
		if($con != '') {
			$sql .= ' WHERE '.$con;	
		}
		$qr = $this->db->query($sql);
		return $qr->result();
	}

	/**
      * This function is used to delete record from table
      * @param : $id record id which you want to delete
      */
	public function delete_data($id='') {

		//Get income_id of Memership Contribution Data
         $this->db->select('income_id');
		 $this->db->from('monthly_contribution');
		 $this->db->where('monthly_contribution_id', $id);
		 $query = $this->db->get();
		 $income_id = $query->row()->income_id;

		//Delete Memership Table Data 
		$this->db->where('income_id', $income_id);
    	$this->db->delete('income');

    	$this->db->where('monthly_contribution_id', $id);
    	$this->db->delete('monthly_contribution');
	}

	function get_member_name($member_id ='') {
		//log_message('debug',print_r('inside get memeber name' + $member_id,TRUE));
		 $member_name = '';
		 $this->db->select('name');
		 $this->db->from('users');
		 echo $this->db->where('users_id', $member_id);
		 $query = $this->db->get();
		 if($query->num_rows() > 0) {
		 	$member_name = $query->row()->name;
		 	return $member_name;
		 } 
		 //log_message('debug',print_r($query,TRUE));
		 return $member_name;
	}

	/**
      * This function is used to Insert Record in table
      * @param : $table - table name in which you want to insert record 
      * @param : $data - record array 
      */
	public function insertRow($table, $data){
		//Insert into Income Table first 
		//log_message('debug',print_r($data['member_name'],TRUE));
		
		
		//Prepare Array for Income Table Insert 
		$data_income['user_id'] = $data['user_id'];
        $data_income['date'] = $data['payment_date'];
        $member_name = $this->get_member_name(isset($data['member_name'])?$data['member_name']:'');
        $data_income['description'] = $member_name;
        $data_income['amount'] = $data['amount'];
        $data_income['category'] = $data['category_id'];
  	  	$this->db->insert('income', $data_income);
	  	$income_id = $this->db->insert_id();

       //Prepare Array for Income Table Insert 
	  	$data_membership['payment_date'] = $data['payment_date'];
		$data_membership['income_id'] = $income_id;
        $data_membership['user_id'] = $data['user_id'];
        $data_membership['date'] = $data['date'];
        $data_membership['member_name'] = $data['member_name'];
        $data_membership['amount'] = $data['amount'];
        $data_membership['category_id'] = $data['category_id'];
  	  	$this->db->insert($table, $data_membership);
	  	return $data_membership_id = $this->db->insert_id();

	}


	/**
      * This function is used to Update Record in table
      * @param : $table - table name in which you want to update record 
      * @param : $col - field name for where clause 
      * @param : $colVal - field value for where clause 
      * @param : $data - updated array 
      */
  	public function updateRow($table, $col, $colVal, $data) {
        //Update Income Data
        $data_income['user_id'] = $this->user_id?$this->user_id:'';
        $data_income['date'] = isset($data['payment_date'])?$data['payment_date']:'';
        $member_name= $this->get_member_name(isset($data['member_name'])?$data['member_name']:'');
        //$data_income['description'] = isset($data['member_name'])?$data['member_name']:'';
        $data_income['description'] = $member_name;
        $data_income['amount'] = isset($data['amount'])?$data['amount']:'';
        $data_income['category'] = isset($data['category_id'])?$data['category_id']:'';
        $income_id = isset($data['income_id'])?$data['income_id']:'';
        $this->db->where('income_id',$income_id);
	    $this->db->update('income',$data_income);

	    //Update Monthly Contribution
 		$this->db->where($col,$colVal);
		$this->db->update($table,$data);
		return true;
  	}
}?>