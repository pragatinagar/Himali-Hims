<?php
	session_start();
	$project_code = $_GET['id'];
	$table = $_GET['tbl'];
	include '../db.php';
	include('../models/show_proposed.php');
	
	$userId = $_SESSION['id'];
	$num_rec_per_page=15;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 

$start_from = ($page-1) * $num_rec_per_page; 

		$result = select_limit_pagination_forprojectdetail('investment',$start_from,$num_rec_per_page);
	
 	$query = "select * from ".$table." where project_code = '$project_code'";
 	$result = mysql_query($query);
	if(mysql_num_rows($result) > 0){
?>
<div class="clear"></div>
<br />

<div id="show_tableData">
  <form action="proposed/update_envt_investment.php" method="post" >
<table width="100%" cellpadding="5" cellspacing="1" bgcolor="#999"> 
  <tr>
    <td align="center" bgcolor="#D0D0E8"><strong>SN</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Detail</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Sector</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Types of Expances</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Unit</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Quality</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Per Unit</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Grant Contribution</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Proponent Contribution</strong></td>
  </tr>
                 <input type="hidden" value="investment" id="table" />
	<?php $count = $start_from+1 ;
		while($data = mysql_fetch_array($result))
		{ ?>
			<tr>
            <input type="hidden" name="id[]" value="<?php echo $data[0];?>" />
    <td align="center"><?php echo $count++;?></td>
    <td height="30" align="center"><input type="text" name="detail[]" value="<?php echo $data['detail'];?>" disabled="disabled" /></td>
    <td height="30" align="center"><input type="text" name="sector[]" value="<?php echo $data['sector'];?>" disabled="disabled" /></td>
    <td align="center"><select name="select[]">
      <option value="">Select...</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select></td>
    <td height="30" align="center"><input type="text" name="unit[]" value="<?php echo $data['unit'];?>" disabled="disabled" /></td>
    <td height="30" align="center"><input type="text" name="quality[]" value="<?php echo $data['quality'];?>" disabled="disabled" /></td>
    <td height="30" align="center"><input type="text" name="per_unit[]" value="<?php echo $data['per_unit'];?>" disabled="disabled" /></td>
    <td height="30" align="center"><input type="text" name="grant_contribution[]" value="<?php echo $data['grant_contribution'];?>" disabled="disabled" /></td>
    <td height="30" align="center"><input type="text" name="Proponent_contribution[]" value="<?php echo $data['Proponent_contribution'];?>" disabled="disabled" /></td>
</tr><?php } 	?>
</table>

<div class="clear"></div>
    <br />
	<input type="submit" value="Submit" name="submit_me" id=""  />
	</form>
<?php 

 }   //// END of first else 

  else
  {
	echo '<div class="clear"></div>';
	echo "<h2>No Data Found !</h2>";	  
  }
  ?>
 </div>
<?php // include('../inc/footer.php'); ?>