<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Dashboard extends CI_Controller {
  	function __construct() {
	    parent::__construct();
	    $this->load->model("Dashboard_model"); 
		if(true==1){
			is_login(); 
			$this->user_id =isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->id:'1';
		}else{ 	
			$this->user_id =1;
		}
  	}

  	/**
      * This function is used to view page
      */
  	public function index() {   
  		if(CheckPermission("dashboard", "all_read,own_read")){
			$data["view_data_income"]= $this->Dashboard_model->Get_total_received_amt();
			$data["view_data_expense"]= $this->Dashboard_model->Get_total_spent_amt();
			$data["view_data_balance"]= $data["view_data_income"]->amount_received - $data["view_data_expense"]->amount_spent;
			$data["view_data_action_items"]= $this->Dashboard_model->Get_pending_action_items();
			$this->load->view("include/header");
			$this->load->view("index",$data);
			$this->load->view("include/footer");
		} else {
			$this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
		}
  	}

  	public function get_total_value() {
        	//$data['Dashdata']= $this->Dashboard_model->Get_total_received_amt();
  		   	$mydata["view_data_income"]= $this->Dashboard_model->Get_total_received_amt();
			$mydata["view_data_expense"]= $this->Dashboard_model->Get_total_spent_amt();
			$mydata["view_data_action_items"]= $this->Dashboard_model->Get_pending_action_items();
			//$data["view_data_balance"]= $data["view_data_income"]->amount_received - $data["view_data_expense"]->amount_spent;

			if($mydata["view_data_income"]->amount_received != null) {
			$data[0] = $mydata["view_data_income"]->amount_received;
		    } else {
		    	$data[0] = 0;
		    }

		    if($mydata["view_data_expense"]->amount_spent != null) {
		    	$data[1] = $mydata["view_data_expense"]->amount_spent;
		    } else {
		    	$data[1]=0;
		    }

			$data[2] = $mydata["view_data_income"]->amount_received - $mydata["view_data_expense"]->amount_spent;
			if($data[2] == null) {
               $data[2] =0;
			}

			if($mydata["view_data_action_items"]->action_item_count != null) {
			$data[3] = $mydata["view_data_action_items"]->action_item_count;
		    } else {
		    	$data[3] = 0;
		    }

        	echo json_encode($data);
    }

}
?>