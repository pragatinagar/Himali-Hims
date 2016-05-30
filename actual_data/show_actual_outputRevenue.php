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
    <div class="clear"></div><br />
   <div id="projectDetail"> </div>  
   <div id="show_tableData">
<table id="dataTable" width="100%" cellpadding="3" cellspacing="1" bgcolor="#333333">
    
  <tr>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Name</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Project</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Agreement Date</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Visit Date</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Report Date</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Source</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Details</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Type of Products</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Unit</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Sells in Local Market and Neighbors for Household Consumption</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Sells to Traders or Commercial Users in Local Market</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Sells beyond Local Market (Agriculture Market Centre, Cities and Export)</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Others (Household Use, Gifts, Feeder to Livestock and other non-commercial use)</strong></td>
      </tr>
    
  <tr>
    <td align="center" bgcolor="#E8F8FF">Quantity</td>
    <td align="center" bgcolor="#E8F8FF">Price per Unit (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Revenue (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Quantity</td>
    <td align="center" bgcolor="#E8F8FF">Price per Unit (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Revenue (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Quantity</td>
    <td align="center" bgcolor="#E8F8FF">Price per Unit (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Revenue (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Quantity</td>
    <td align="center" bgcolor="#E8F8FF">Price per Unit (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Revenue (In NRs.)</td>

    </tr>
    
        <?php $sql = "select * from actual_revenue  limit ".$start_from.','.$num_rec_per_page;
              $count = 0;
  		$query = mysql_query($sql);//echo count($query);
		while($result = mysql_fetch_array($query))
                        {   
                 $count += 1;
                 $ag_date = "select agreement_date_ad,name_add_proponent from projectdetail where project_code = '".$result['project_code']."'";
                 $show_ag_date = mysql_query($ag_date);
                 $show = mysql_fetch_array($show_ag_date);
                ?>
  
  <tr align="center">
    <td height="30" bgcolor="#FFFFFF"><?php echo $count; ?></td>
    <td bgcolor="#FFFFFF"><div style="width:150px;"><?php echo $show[1]; ?></div></td>
    <td bgcolor="#FFFFFF"><?php echo $result['project_code']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $show[0]; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['visitdate']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['reportdate']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['source']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['detail']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['types']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['unit']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['quantity']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['local_quantity']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['local_price']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['local_revenue']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['traders_quantity']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['traders_price']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['traders_revenue']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['beyond_quantity']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['beyond_price']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['beyond_revenue']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['others_quantity']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['others_price']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['others_revenue']; ?></td>
    </tr>
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

