<div class="content-wrapper">

 <section class="content">

 <?php if($this->session->flashdata("message")){?><div class="alert alert-info" id="successMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo $this->session->flashdata("message")?></div><?php }?>

  <div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
            	<h3 class="box-title">All Reports</h3>
            </div>
        </div>
    </div>
  </div>
 
  <div class="row">
  	<div class="col-lg-12">
        <div class="panel panel-default">
			<ul class="nav nav-pills">
  			<li class="active"><a data-toggle="pill" href="#home">Accounts Summary</a></li>
  			<li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
  			<li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
			</ul>

   <div class="tab-content">
   <div id="home" class="tab-pane fade in active">
    <div class='col-sm-2'>
   <h3>Search Criteria</h3>
</div>
   <!-- Start Date-->
   <div class='col-sm-3'>
   <div class="form-group">
<label for="date">Start Date<span class="text-red">*</span></label>
<input type="date" placeholder=" Start Date" class="form-control" id="start_date" name="start_date" required value="<?php $myDate = new DateTime(date("Y")."-01-01"); echo $myDate->format("Y-m-d");?>"  >
</div>

   </div>
 <div class='col-sm-3'>
       <div class="form-group">
<label for="date">End Date<span class="text-red">*</span></label>
<input type="date" placeholder=" End Date" class="form-control" id="end_date" name="end_date" required value="<?php echo date("Y-m-d",strtotime("now"));?>"  >
</div>
</div>

 <div class='col-sm-3'>
 <div class="form-group">
<input type="submit" value="Search" id="btnsave" name="save" class="btn btn-primary btn-color">
</div>
</div>

<div class='col-sm-8'>
 <div class="form-group">
<input type="submit" value="Generate Report" id="btnreport" name="btnreport"  class="btn btn-primary btn-color" >
</div>
</div>

   <div class="box-body" id ="tabledata">
	  <table id="example_notes" class="cell-border example_notes table table-striped table1 table-bordered table-hover dataTable"  border="1" cellpadding="1" cellspacing="1" nobr="false">
		<thead>
		<tr bgcolor="#007bff" font color="#fffff">
		<th>Date</th>
		<th>Description</th>
		<th>Category Name</th>
		<th>Income</th>
		<th>Expenses</th>
    <th>Balance</th>
	    </tr>
	    </thead>
		<tbody id="mytable" >
	     <!-- <?php $this->load->view('tableData'); ?> -->
	    </tbody> 
		</table>
    </div>
    </div>
	  <div id="menu1" class="tab-pane fade">
	    <h3>Menu 1</h3>
	    <p>Some content in menu 1.</p>
	  </div>

	  <div id="menu2" class="tab-pane fade">
	    <h3>Menu 2</h3>
	    <p>Some content in menu 2.</p>
	  </div>
    </div>
  </div>
</div>

</div>

				
</section>

</div>

<script type="text/javascript">
$(document).ready(function($) {
	var start_date_selected = '';
    var end_date_selected = '';
    populate_date();  
    //report_data();

    $('#btnreport').click(function() {
    	var htmldata =  document.getElementById("tabledata").innerHTML;
        //console.log(htmldata);
        var htmlstring = JSON.stringify(htmldata);     
 
         $.ajax({
              method : 'post',
              url: '<?php echo base_url().'reports/generate_report'; ?>',
              dataType : "JSON",
              data:{data:htmlstring},
              success: function(responce){
              //console.log(responce);
              window.open(responce,'_blank');
              }   
         });
   	
    });
    $('#start_date').change(function () {
 	     	 start_date_selected = $('#start_date').val(); 
              //console.log(start_date_selected);
 	});

    $('#end_date').change(function () {
 	     	 end_date_selected = $('#end_date').val();
 	         //console.log(end_date_selected);
 	});
 	 
    
 	$('#btnsave').click(function() {
			//location.reload();
			populate_date();  
		
    });

 	function populate_date() {
  	 	 $("#mytable").empty();
 	 	   start_date_selected =  $('#start_date').val(); 
 	 	   end_date_selected =  $('#end_date').val();
 	 		 var my_arr = new Array(start_date_selected, end_date_selected);
       var jsonString = JSON.stringify(my_arr);
       $.ajax({
       method : 'post',
       url: '<?php echo base_url().'reports/get_default_data'; ?>',
       dataType : "json",
       data:{data:jsonString},
       success: function(responce){
       var tr;
       var paymentdate = '00';
       var startdate = true;
       var SumIncome = 0;
       var SumExpense = 0;
       var Balance =0;
       var SumBalance = 0;
       var Yearmonth;
       //var changedate = '';
       for (var i = 0; i < responce.length; i++) {
           if(startdate){
              startdate = false;
              paymentdate = responce[i].date.slice(5,7);
        } else {
                  if( paymentdate != responce[i].date.slice(5,7)) {
                   tr = $('<tr/>');
                   //tr.append("<td >" + 0 + "</td>");
                   SumBalance = parseInt(SumIncome) - parseInt(SumExpense);
                   //SumBalance = SumBalance + Balance;
                  
                   tr.append("<td colspan='3' bgcolor='#ff9d00' align='right' font size='9'>" + '<h3>Balance as of  '+ Yearmonth + "</h3></td>");
                   //tr.append("<td>" + 0 + "</td>");
                   tr.append("<td bgcolor='b5d2dd'><h3>" + SumIncome + "</h3></td>");
                   tr.append("<td bgcolor='b5d2dd'><h3>" + SumExpense + "</h3></td>");
                   tr.append("<td bgcolor='b5d2dd'><h3>" + SumBalance + "</h3></td>");
                   $('tbody').append(tr);
                   //paymentdate = responce[i].date.slice(5,7); 
                   startdate = true;
                   } 
               }
               tr = $('<tr/>');
			         tr.append("<td>" + responce[i].date + "</td>");
			         tr.append("<td>" + responce[i].description + "</td>");
			         tr.append("<td>" + responce[i].category_name + "</td>");
                  
                  if(responce[i].type == 1) {
                    tr.append("<td>" + responce[i].amount + "</td>");
                    tr.append("<td>" + ''  + "</td>");
                    SumIncome = parseInt(SumIncome) + parseInt(responce[i].amount);
                  } else {
                     tr.append("<td>" + '' + "</td>");
                     tr.append("<td>" + responce[i].amount + "</td>");
                     SumExpense = parseInt(SumExpense) + parseInt(responce[i].amount);
                  }
                   Yearmonth = responce[i].date.slice(0,7);
			            tr.append("<td>" + '' + "</td>");
			            $('tbody').append(tr);
          } 
          // Last Column
          tr = $('<tr/>');
          //tr.append("<td colspan='3' bgcolor='#ff9d00' align='right' font size='9'>" + '<h3>Balance as of  '+ responce[i].date.slice(0,7) + "</h3></td>");
          tr.append("<td colspan='3' bgcolor='#ff9d00' align='right' font size='9'>" + '<h3>Balance as of  ' + Yearmonth + "</td>");
          //tr.append("<td>" + 0 + "</td>");
          //tr.append("<td>" + 0 + "</td>");
           SumBalance = parseInt(SumIncome) - parseInt(SumExpense);
          tr.append("<td bgcolor='b5d2dd'><h3>" + SumIncome + "</h3></td>");
          tr.append("<td bgcolor='b5d2dd'><h3>" + SumExpense + "</h3></td>");
          tr.append("<td bgcolor='b5d2dd'><h3>" + SumBalance + "</h3></td>");
          $('tbody').append(tr);

      }  //End Success Loop 
    });
 	} //End Populate Function

});

</script>