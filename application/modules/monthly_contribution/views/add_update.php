<form action="<?php echo base_url()."monthly_contribution/add_edit"; ?>" method="post" role="form" id="form" enctype="multipart/form-data" style="padding: 0px 30px">
 <?php if(isset($data->donation_id)){?><input type="hidden"  name="id" value="<?php echo isset($data->donation_id) ?$data->donation_id : "";?>"> <?php } ?>
 <div class="box-body">
 <div class="form-group">
<label for="date">Payment Date <span class="text-red">*</span></label>
<input type="date" placeholder=" Date" class="form-control" id="date" name="date" required value="<?php echo isset($data->date)?date("Y-m-d",strtotime($data->date)):date("Y-m-d",strtotime("now"));?>"  >
</div>

<div class="form-group">
<label for="description">Member Name <span class="text-red">*</span></label>
<input type="text" placeholder=" Description" class="form-control" id="description" name="description" required value="<?php echo isset($data->description)?$data->description:"";?>"  >
</div>

 <div class="form-group">
<label for="date">Contribution for Year/Month <span class="text-red">*</span></label>
<input type="date" placeholder=" Date" class="form-control" id="date" name="date" required value="<?php echo isset($data->date)?date("Y-m",strtotime($data->date)):date("Y-m",strtotime("now"));?>"  >
</div>


<div class="form-group">
<label for="amount">Amount <span class="text-red">*</span></label>
<input type="number" step="any" placeholder=" Amount" class="form-control" id="amount" name="amount" required value="<?php echo isset($data->amount)?$data->amount:"";?>"  >
</div>

<div class="form-group">
<label for="category">Category </label>
<?php echo selectBoxDynamic("category","income_category","category_name",isset($data->category) ?$data->category : "");?>
</div>
</div>
 <!-- /.box-body -->
 <div class="box-footer">
 <input type="submit" value="Save" name="save" class="btn btn-primary btn-color">
 </div>
     </form>