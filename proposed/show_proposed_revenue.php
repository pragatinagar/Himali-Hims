<?php
error_reporting(0);
session_start();

include('../inc/header.php');
include('../inc/nav.php');
include('../models/show_proposed.php');
 ?>
 
 <div class="content-wrapper">

<?php
	if(!isset($_SESSION['id']))
	{
		header('Location:../index.php');
	}
	else
	{ include '../get_projectCode.php'; 
		?>
    <form action="export.php" method="post">
        <input type="hidden" name="table" value="revenue" />
        <input type="submit" class="add-labor fr mr" value="Export Data" />
        </form>   
  <h2 style="color:#069;">Proposed Revenue List</h2>
  <span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;"><?php
      $query1 = mysql_query("select project_code,name_add_proponent from projectdetail order by project_code asc");
      echo 'Select Project: '.'<select required name="projectid" id="myHref" >';
      echo "<option value='okk' selected>Select</option>";  
      while($data1 = mysql_fetch_array($query1))
      {	   $projct = $data1[0];
		  echo "<option value=\"$projct\">$data1[0]</option>";
	   }           
      echo '</select>';   
    ?></span>
    
   
     <script>
   $(document).ready(function() {

		$('#myHref').change(function(){
		  var value = $('#myHref').val();
		  var table = $('#table').val();
		$.get('get_selected_revenue.php',{
			id:value,
			tbl:table},function(data)
		{ $('#projectDetail').html(data);
		}); });	
        $('#myHref').on('change',function(){
		$('#projectDetail').fadeIn('slow');
		$('#show_tableData').hide();
		});
  });
	
   </script>
   <div id="projectDetail"> </div>  
   
	<div class="clear"></div><br />
        <div id="show_tableData">
        
        <?php $userId = $_SESSION['id'];
		$num_rec_per_page=15;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$result = select_limit_pagination_forprojectdetail('revenue',$start_from,$num_rec_per_page);   ?>
		<table width="100%" cellpadding="5" cellspacing="1" bgcolor="#999">
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
 
<?php include('pagination.php');
	  if(isset($thisForpagination) == 'yes')
	  pagination_condition('expenses','show_proposed_revenue',$num_rec_per_page);	
	  else
	  pagination('expenses','show_proposed_revenue',$num_rec_per_page,$projct);	
 
 }   //// END of first else 
?> </div>
<div class="clear"></div>
<br />
<?php include('../inc/footer.php'); ?>
</html>

