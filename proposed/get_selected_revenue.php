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
	$result = select_limit_pagination_forprojectdetail('revenue',$start_from,$num_rec_per_page);
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
    <td align="center" bgcolor="#D0D0E8"><strong>Product</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Unit</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>P1</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>P2</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>P3</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>P4</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>P5</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Q1</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Q2</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Q3</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Q4</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Q5</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>T1</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>T2</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>T3</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>T4</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>T5</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Edit</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Delete</strong></td>
  </tr>
            <input type="hidden" value="revenue" id="table" />
		<?php $count = $start_from+1 ;
		while($data = mysql_fetch_array($result))
		{ ?>
			<tr>
    <td align="center"><?php echo $count++;?></td>
    <td height="30" align="center"><?php echo $data[3];?></td>
    <td height="30" align="center"><?php echo $data[4];?></td>
    <td height="30" align="center"><?php echo $data[6];?></td>
    <td height="30" align="center"><?php echo $data[7];?></td>
    <td height="30" align="center"><?php echo $data[8];?></td>
    <td height="30" align="center"><?php echo $data[9];?></td>
     <td height="30" align="center"><?php echo $data[10];?></td>
    <td height="30" align="center"><?php echo $data[11];?></td>
    <td height="30" align="center"><?php echo $data[12];?></td>
     <td height="30" align="center"><?php echo $data[13];?></td>
    <td height="30" align="center"><?php echo $data[14];?></td>
    <td height="30" align="center"><?php echo $data[15];?></td>
    <td height="30" align="center"><?php echo $data[16];?></td>
    <td height="30" align="center"><?php echo $data[17];?></td>
    <td height="30" align="center"><?php echo $data[18];?></td>
    <td height="30" align="center"><?php echo $data[19];?></td>
    <td height="30" align="center"><?php echo $data[20];?></td>
    <td height="30" align="center"><?php echo $data[21];?></td>
    <td height="30" align="center"><?php if($_SESSION['id2'] == $data['userId']){ ?><a href="edit_proposed_revenue.php?table=revenue&pid=<?php echo $data[0];?>" title="Edit"><div class="edit"></div></a><?php } ?></td>
    <td height="30" align="center"><?php if($_SESSION['id2'] == $data['userId']){ ?><a href="deleteMe.php?page=show_proposed_revenue&table=revenue&pid=<?php echo $data[0];?>" onclick="return confirm('sure to delete !');" title="Delete"><div class="delete"></div></a><?php } ?></td>
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
