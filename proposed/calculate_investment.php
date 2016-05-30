<?php
	session_start();
	$project_code = $_GET['id'];
	$table = $_GET['tbl'];
	include '../db.php';
	include('../models/show_proposed.php');
	
	$userId = $_SESSION['id'];
 	$query = "select * from ".$table." where project_code = '$project_code'";
 	$result = mysql_query($query);
	if(mysql_num_rows($result) > 0){
		
		?>
<div class="clear"></div>
<br />

<div id="show_tableData"><table width="100%" cellpadding="5" cellspacing="1" bgcolor="#999"> 
      
  <tr>
    <td align="center" bgcolor="#D0D0E8"><strong>SN</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Code No.</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Detail</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Sector</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Unit</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Quality</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Per Unit</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Grant Contribution</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Proponent Contribution</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Edit</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Delete</strong></td>
  </tr>
                 <input type="hidden" value="investment" id="table" />
	<?php $count = $start_from+1 ;
		while($data = mysql_fetch_array($result))
		{ ?>
			<tr>
    <td align="center"><?php echo $count++;?></td>
    <td height="30" align="center"><?php echo $data['project_code'];?></td>
    <td height="30" align="center"><?php echo $data['detail'];?></td>
    <td height="30" align="center"><?php echo $data['sector'];?></td>
    <td height="30" align="center"><?php echo $data['unit'];?></td>
    <td height="30" align="center"><?php echo $data['quality'];?></td>
    <td height="30" align="center"><?php echo $data['per_unit'];?></td>
    <td height="30" align="center"><?php echo $data['grant_contribution'];?></td>
    <td height="30" align="center"><?php echo $data['Proponent_contribution'];?></td>
<td height="30" align="center"><?php if($_SESSION['id2'] == $data['userId']){ ?><a href="edit_proposed_investment.php?table=investment&pid=<?php echo $data[0];?>" title="Edit"><div class="edit"></div></a><?php } ?></td>
    <td height="30" align="center"><?php if($_SESSION['id2'] == $data['userId']){ ?><a href="deleteMe.php?page=show_proposed_investment&table=investment&pid=<?php echo $data[0];?>" onclick="return confirm('sure to delete !');" title="Delete"><div class="delete"></div></a><?php } ?></td>
  </tr><?php } 	?>
</table>

<div class="clear"></div>
    


<?php  
 }   //// END of first else 

  else
  {
	  echo '<div class="clear"></div>';
	echo "<h2>No Data Found !</h2>";	  
  }
  ?>
 </div>
