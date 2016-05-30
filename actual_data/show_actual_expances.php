<?php
error_reporting(0);
session_start();

include('../inc/header.php');
include('../inc/nav.php');
include('../models/show_proposed.php');
include ("../get_projectCode.php"); 
 ?>
 
 <div class="content-wrapper">

<?php
	if(isset($_SESSION['id']))
	{	   
           $num_rec_per_page=25;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 

$start_from = ($page-1) * $num_rec_per_page; 
		?>
     
  <h2 style="color:#069;">Actual Revenue List</h2>
  <span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;"><?php
      $query1 = mysql_query("select project_code,name_add_proponent from projectdetail order by project_code asc"); 
      echo 'Select Project: '.'<select required name="projectid" id="myHref" >';
      echo "<option value='okk' selected>Select</option>";  
      while($data1 = mysql_fetch_array($query1))
      {
	  $projct = $data1[0];
      $name = $data1[1];
	  echo "<option value=\"$projct\">$data1[0]</option>";
      }           
      echo '</select>';   
    ?></span>
    
     <script>
   $(document).ready(function() {

	$('#myHref').change(function(){
		  var value = $('#myHref').val();
		  var table = "<?php echo $_SESSION['id']; ?>";
		$.get('get_selected_expences.php',{
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
    <div class="clear"></div><br />
   <div id="projectDetail"> </div>  
   <div id="show_tableData">
<table id="dataTable" width="100%" cellpadding="3" cellspacing="1" bgcolor="#333333">
    
	<tr>
   <td width="21%" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>   
   <td width="21%" align="center" bgcolor="#E8F8FF"><strong>Name</strong></td>  
    <td width="21%" align="center" bgcolor="#E8F8FF"><strong>Project</strong></td> 
   <td  width="21%" align="center" bgcolor="#E8F8FF"><strong>Agreement Date</strong></td>
    <td width="21%" align="center" bgcolor="#E8F8FF"><strong>Visit Date</strong></td>
    <td width="21%" align="center" bgcolor="#E8F8FF"><strong>Report Date</strong></td>
    <td width="21%" align="center" bgcolor="#E8F8FF"><strong>Source</strong></td>
   <td width="21%" align="center" bgcolor="#E8F8FF"><strong>Details</strong></td>
   <td width="15%" align="center" bgcolor="#E8F8FF"><strong>Unit</strong></td>
   <td width="15%" align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>
   <td width="15%" align="center" bgcolor="#E8F8FF"><strong>Cost per Unit(In NRs)</strong></td>
   <td width="15%" align="center" bgcolor="#E8F8FF"><strong>Total Cost(In NRs)</strong></td>
   
  </tr>
 
        <?php  $sql = "select * from actual_expances where userId = ".$_SESSION['id']
                . " limit ".$start_from.','.$num_rec_per_page;
               $count = 0;
  	       $query = mysql_query($sql);//echo count($query);
	       while($result = mysql_fetch_array($query)) {   
                 $count += 1;
                 $ag_date = "select agreement_date_ad,name_add_proponent from projectdetail where project_code = '".$result['project_code']."'";
                 $show_ag_date = mysql_query($ag_date);
                 $show = mysql_fetch_array($show_ag_date);
                ?>
        <tr>    
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $count; ?></td>  
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $show[1]; ?></td>  
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $result['project_code']; ?></td>  
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $show[0]; ?></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $result['visitdate']; ?></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $result['reportdate']; ?></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $result['source']; ?></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $result['detail']; ?></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $result['unit']; ?></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $result['quantity']; ?></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $result['cost']; ?></td>    
    <td height="50" align="center" bgcolor="#FFFFFF"><?php echo $result['total_cost']; ?></td>     </tr>

 	<?php } ?>
</table>
</div>

<div class="clear"></div><br />

</form>

<div class="clear"></div>

</div>
<!--content-wrapper-->
  <?php 
        include('pagination.php');
	pagination('actual_revenue','show_actual_outputRevenue',$num_rec_per_page);    
	////// first if ends here  
	}
	else
header("location:../index.php"); ?> 

<?php include('../inc/footer.php'); ?>

