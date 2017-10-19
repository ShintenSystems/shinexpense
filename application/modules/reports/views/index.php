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

   <div class="box-body">
	    <table id="example_notes" class="cell-border example_notes table table-striped table1 table-bordered table-hover dataTable">
		<thead>
		<tr>
		<th>Date</th>
		<th>Title</th>
		<th>Description</th>
		<th>Category Name</th>
		<th>Deadline</th>
		<th>Tantou</th>
	    </tr>
	    </thead>
		<tbody>
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
jQuery(document).ready(function($) {
	 var start_date = $('#start_date').val();
 	 var end_date = $('#end_date').val();
 	 var my_arr = new Array(start_date, end_date);
     var jsonString = JSON.stringify(my_arr);
              $.ajax({
             method : 'post',
              url: '<?php echo base_url().'reports/get_default_data'; ?>',
              dataType : "json",
              data:{data:jsonString},
             success: function(responce){
                         // you can alert this responce or print this in any html element
                         //alert(responce);
                         //console.log(responce);
                         //$('tbody').html(responce);
                         
                        var tr;
        				for (var i = 0; i < responce.length; i++) {
			            tr = $('<tr/>');
			            tr.append("<td>" + responce[i].date + "</td>");
			            tr.append("<td>" + responce[i].title + "</td>");
			            tr.append("<td>" + responce[i].description + "</td>");
			            tr.append("<td>" + responce[i].category_name + "</td>");
			            tr.append("<td>" + responce[i].deadline + "</td>");
			            tr.append("<td>" + responce[i].name + "</td>");
			            $('tbody').append(tr);
                        } 
                 }   
         });

});
( function($) { 
$(document).ready(function(){
 	     $('#btnsave').click(function() {
 	     $('#start_date').change(function () {
 	     	 var start_date = $('#start_date').val();
             //console.log(start_date);
 	     });

 	    $('#end_date').change(function () {
 	     	 var end_date = $('#end_date').val();
             //console.log(end_date);
 	     });
 	    //populate_data();
 	     	 var my_arr = new Array(start_date, end_date);
     var jsonString = JSON.stringify(my_arr);
              $.ajax({
             method : 'post',
              url: '<?php echo base_url().'reports/get_default_data'; ?>',
              dataType : "json",
              data:{data:jsonString},
             success: function(responce){
                         // you can alert this responce or print this in any html element
                         //alert(responce);
                         //console.log(responce);
                         //$('tbody').html(responce);
                         
                        var tr;
        				for (var i = 0; i < responce.length; i++) {
			            tr = $('<tr/>');
			            tr.append("<td>" + responce[i].date + "</td>");
			            tr.append("<td>" + responce[i].title + "</td>");
			            tr.append("<td>" + responce[i].description + "</td>");
			            tr.append("<td>" + responce[i].category_name + "</td>");
			            tr.append("<td>" + responce[i].deadline + "</td>");
			            tr.append("<td>" + responce[i].name + "</td>");
			            $('tbody').append(tr);
                        } 
                 }   
         });
        });


	});
}) ( jQuery );

</script>