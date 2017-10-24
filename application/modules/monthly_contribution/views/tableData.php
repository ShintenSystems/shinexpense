<?php 
$tablename = "monthly_contribution";
$tab_id = $tablename.'_id';
if(isset($view_data) && is_array($view_data) && !empty($view_data)) { 
foreach ($view_data as $key => $value) {?>
<tr>
<td><input type="checkbox" name="selData" value="<?php echo $value->$tab_id; ?>"></td>
<td><?php echo $value->name; ?></td>
<td><?php echo date('Y',strtotime($value->date)); ?></td>
<td><?php echo date('M',strtotime($value->date)); ?></td>
<td><?php echo $value->amount; ?></td>
<td><?php echo $value->payment_date; ?></td>
<td><?php echo $value->category_name; ?></td>
<td><?php 
	      if(CheckPermission("monthly_contribution", "all_update")){
	      echo '<a sty id="btnEditRow" class="modalButton mClass"  href="javascript:;" type="button" data-src="'.$value->$tab_id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
	      }else if(CheckPermission("monthly_contribution", "own_update") && (CheckPermission("monthly_contribution", "all_update")!=true)){
	        $user_id =getRowByTableColomId("monthly_contribution",$value->$tab_id,$tab_id,"user_id");
	        if($user_id==$this->user_id){
	      echo '<a sty id="btnEditRow" class="modalButton mClass"  href="javascript:;" type="button" data-src="'.$value->$tab_id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
	        }
	      }
	      
	      if(CheckPermission("monthly_contribution", "all_delete")){
	      echo '<a data-toggle="modal" class="mClass" style="cursor:pointer;"  data-target="#cnfrm_delete" title="delete" onclick="setId('.$value->$tab_id.', \'monthly_contribution\')"><i class="fa fa-trash-o" ></i></a>';}
	      else if(CheckPermission("monthly_contribution", "own_delete") && (CheckPermission("monthly_contribution", "all_delete")!=true)){
	        $user_id =getRowByTableColomId("monthly_contribution",$value->$tab_id,$tab_id,"user_id");
	        if($user_id==$this->user_id){
	      echo '<a data-toggle="modal" class="mClass" style="cursor:pointer;"  data-target="#cnfrm_delete" title="delete" onclick="setId('.$value->$tab_id.', \'monthly_contribution\')"><i class="fa fa-trash-o" ></i></a>';
	        }
	      } ?>
	    </td>
	  </tr>    
	  
<?php } } ?>
