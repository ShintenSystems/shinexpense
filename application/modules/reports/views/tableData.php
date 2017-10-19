<?php 
$tablename = "notes";
$tab_id = $tablename.'_id';
if(isset($view_data) && is_array($view_data) && !empty($view_data)) { 
 foreach ($view_data as $key => $value) {?>
  <tr>
<td><?php echo $value->date; ?></td>
<td><?php echo $value->title; ?></td>
<td><?php echo $value->description; ?></td>
<td><?php echo $value->category_name; ?></td>
<td><?php echo $value->deadline; ?></td>
<td><?php echo $value->name; ?></td>
</tr>    
	  
<?php } } ?>
