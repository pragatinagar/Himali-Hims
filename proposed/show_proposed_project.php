<?php

error_reporting(0);
session_start();

include('../inc/header.php');
include('../inc/nav.php');
include('../models/show_proposed.php');
 ?>
<script>
	
</script>
<div class="content-wrapper">

<?php
	if(!isset($_SESSION['id']))
	{
		header('Location:../index.php');
	}
	else
	{
		$userId = $_SESSION['id'];
		$num_rec_per_page=15; //nepal japan sewa 9802059727

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 

$start_from = ($page-1) * $num_rec_per_page; 

		$result = select_limit_pagination_forprojectdetail('projectdetail',$start_from,$num_rec_per_page);  ?>        
     
        <form action="export.php" method="post">
        <input type="hidden" name="table" value="projectdetail" />
        <input type="hidden" name="page" value="show_proposed_project" />
        <input type="submit" class="add-labor fr mr" value="Export Data" />
        </form>
        
        <h2 style="color:#069;">All Project List</h2>
        <table width="100%" cellpadding="5" cellspacing="1" bgcolor="#999">
  <tr>
    <td align="center" bgcolor="#D0D0E8"><strong>SN</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Code No.</strong></td>
    <td bgcolor="#D0D0E8"><strong>Proponent's Name</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>District</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Agreement Date<br />
      (A.D)</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Completion Date<br />
(A.D)</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Total Investment<br />
      (In NRs)</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Grant Contribution<br />
      (In NRs.)</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Proponent's Contribution<br />
     (In NRs.)</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Edit</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Delete</strong></td>
  </tr>
                 
	<?php $count = $start_from+1 ;
		while($data = mysql_fetch_array($result))
		{ ?>
			<tr>
    <td align="center"><?php echo $count++;?></td>
    <td height="30" align="center"><?php echo $data[1];?></td>
    <td height="30"><?php echo $data[2];?></td>
    <td height="30" align="center"><?php echo $data[4];?></td>
    <td height="30" align="center"><?php echo $data[11];?></td>
    <td height="30" align="center"><?php echo $data[13];?></td>
    <td height="30" align="center"><?php echo $data[15].' /-';?></td>
    <td height="30" align="center"><?php echo $data[17].' /-';?></td>
    <td height="30" align="center"><?php echo $data[19].' /-';?></td>
    <td height="30" align="center"><a href="edit_proposed_project.php?pid=<?php echo $data[1];?>" title="Edit"><div class="edit"></div></a></td>
    <td height="30" align="center"><a href="deleteMe.php?page=show_proposed_project&table=projectdetail&pid=<?php echo $data[1];?>" onclick="return confirm('Sure to delete !');" title="Delete"><div class="delete"></div></a></td>
  </tr><?php }	?>
</table>

<div class="clear"></div>
    
</div>

<?php include('pagination.php');
	  pagination('projectdetail','show_proposed_project',$num_rec_per_page);
 }   //// END of first else 
 include('../inc/footer.php'); ?>
</html>