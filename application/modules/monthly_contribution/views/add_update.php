<form action="<?php echo base_url()."monthly_contribution/add_edit"; ?>" method="post" role="form" id="form" enctype="multipart/form-data" style="padding: 0px 30px">

<?php if(isset($data->monthly_contribution_id)){?><input type="hidden"  name="id" value="<?php echo isset($data->monthly_contribution_id)?$data->monthly_contribution_id : "";?>"> <?php } ?>
<div class="box-body">

<?php if(isset($data->income_id)){?><input type="hidden"  name="income_id" value="<?php echo isset($data->income_id)?$data->income_id : "";?>"> <?php } ?>
<div class="box-body">

<div class="form-group">
<label for="date">Payment Date<span class="text-red">*</span></label>
<input type="date" placeholder="Payment Date" class="form-control" id="payment_date" name="payment_date" required value="<?php echo isset($data->payment_date)?date("Y-m-d",strtotime($data->payment_date)):date("Y-m-d",strtotime("now"));?>"  >
</div>

<div class="form-group">
<label for="category">Member Name </label>
<?php echo selectBoxDynamic("member_name","users","name",isset($data->member_name)?$data->member_name : "");?>
</div>

 <div class="form-group">
<label for="date">Contribution for Year <span class="text-red">*</span></label>
<input type="date" placeholder="Contribution Year" class="form-control" id="" name="date" required value="<?php echo isset($data->date)?date("Y-m-d",strtotime($data->date)):date("Y-m-d",strtotime("now"));?>"  >
</div>


<div class="form-group">
<label for="amount">Amount <span class="text-red">*</span></label>
<input type="number" step="any" placeholder=" Amount" class="form-control" id="amount" name="amount" required value="<?php echo isset($data->amount)?$data->amount:"";?>"  >
</div>

<div class="form-group">
<label for="category">Category </label>
<?php echo selectBoxDynamic("category_id","income_category","category_name",isset($data->category_id)?$data->category_id:"");?>
</div>

</div>
 <!-- /.box-body -->
 <div class="box-footer">
 <input type="submit" value="Save" name="save" id="submitbutton1" class="btn btn-primary btn-color">
 </div>
  <div  style="color:#ff0023" id="yourmessage1"></div>

<script type="text/javascript">
$(document).ready(function(){

    s = $('select[name="category_id"]');

    document.getElementById("submitbutton1").onclick = function() {myFunction1()};

    function myFunction1() {
    	if(s.val() != 1) {

    		  $("#yourmessage1").html("You can Add/Update only Monthly Contribution here. For Other go to Income Tab"); 
    		   document.getElementById("submitbutton1").disabled=true; 
    	} else {
    		 $("#yourmessage1").html(""); 
    		  document.getElementById("submitbutton1").disabled=false; 
    	}

    }
    
    $(s).change(function()
    {   
    	if(s.val() != 1) {

    		  $("#yourmessage1").html("You can Add/Update only Monthly Contribution here. For Other go to Income Tab"); 
    		   document.getElementById("submitbutton1").disabled=true; 
    	} else {
    		 $("#yourmessage1").html(""); 
    		  document.getElementById("submitbutton1").disabled=false; 
    	}

    });

});
</script>



 </form>