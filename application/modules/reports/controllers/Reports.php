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
			//$this->load->library('Pdf');

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
  		$table = 'a';
  		$coumnname = 'date';

    	$condition = " DATE_FORMAT(`$table`.`".$coumnname."`, '%Y/%m/%d') >= '".date('Y/m/d', strtotime($dataSearch[0]))."' AND  DATE_FORMAT(`$table`.`".$coumnname."`, '%Y/%m/%d') <= '".date('Y/m/d', strtotime($dataSearch[1]))."' ";
  		
  		//$condition = 'date='.'$start_date'. 'AND date='. '$end_date'. '';
  		//$condition = "date= '{$start_date}' OR date='{$end_date}'";
        log_message('debug',print_r($condition,TRUE));  
        $data = $this->Reports_model->get_data($condition);
  		echo json_encode($data);
  	}


  	public function generate_report(){
  		
  		$htmldata = json_decode($_POST['data']);
  		//log_message('info','This is teststst');
  		//log_message('debug',print_r($htmldata,TRUE));

  		$this->load->library('Pdf');

    	// NON-BREAKING ROWS (nobr="true")

		// create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Roshan Chimankar');
		$pdf->SetTitle('AIM Financial Report');
		$pdf->SetSubject('Finance Report');
		$pdf->SetKeywords('TCPDF, PDF, Finance, Report, AIM');

		// set default header data
		//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '', '');
        //$pdf->setFooterData(array(210,244,120), array(0,100,111));
     
		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		
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
		$pdf->SetFont('helvetica', 'B', 20);

		// add a page
		$pdf->AddPage();

		$pdf->Write(0, 'AIM Japan Financial Report', '', 0, 'L', true, 0, false, false, 0);

		$pdf->SetFont('helvetica', '', 8);

		// -----------------------------------------------------------------------------
 
		// set some text to print
$htmltext = <<<EOD
{$htmldata}
EOD;


  		$pdf->writeHTML($htmltext, true, true, true, true, '');
		
		//$pdf->Write(0, 'AIM Japan Financial Report', '', 0, 'L', true, 0, false, false, 0);
  	

  	    //log_message('info',FCPATH);
     
        //$time = time();
        $filedate = new DateTime();
        $filename = $filedate->format('Y-m-d-His');
        $pdf->Output(FCPATH .'/out_report/testReport_' . $filename . '.pdf', 'F');

        $pdf_path = base_url().'out_report/testReport_'. $filename . '.pdf';
        //log_message('info',$pdf_path);
        echo json_encode($pdf_path);

		//============================================================+
		// END OF FILE
		//============================================================+
		  		
    }
   
}



?>