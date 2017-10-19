<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Reports extends CI_Controller {
  	function __construct() {
	    parent::__construct();
	    $this->load->model("Reports_model"); 
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
  		if(CheckPermission("notes", "all_read,own_read")){
			$data["view_data"]= $this->Reports_model->get_data();
			//log_message('debug',print_r($data,TRUE));
			$this->load->library('Pdf');

            //$this->generate_report();

			$this->load->view("include/header");
			$this->load->view("index",$data);
			$this->load->view("include/footer");
		} else {
			$this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
		}
  	}

  	public function get_default_data() {
  		$dataSearch = json_decode($_POST['data']);

  		$start_date = $dataSearch[0];
  		$end_date =   $dataSearch[1];
  		$table = 'notes';
  		$coumnname = 'date';

    	$condition = " DATE_FORMAT(`$table`.`".$coumnname."`, '%Y/%m/%d') >= '".date('Y/m/d', strtotime($dataSearch[0]))."' AND  DATE_FORMAT(`$table`.`".$coumnname."`, '%Y/%m/%d') <= '".date('Y/m/d', strtotime($dataSearch[1]))."' ";
  		
  		//$condition = 'date='.'$start_date'. 'AND date='. '$end_date'. '';
  		//$condition = "date= '{$start_date}' OR date='{$end_date}'";
        log_message('debug',print_r($condition,TRUE));  
        $data = $this->Reports_model->get_data($condition);
  		echo json_encode($data);;
  	}


  	public function generate_report(){

  		// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 002');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'BI', 20);

// add a page
$pdf->AddPage();

// set some text to print
$txt = <<<EOD
TCPDF Example 002

Default page header and footer are disabled using setPrintHeader() and setPrintFooter() methods.
EOD;

// print a block of text using Write()
$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_002.pdf', 'I');
    }
}
?>