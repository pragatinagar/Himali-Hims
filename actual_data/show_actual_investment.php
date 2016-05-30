<?php
//error_reporting(0);
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
		$.get('get_selected_investment.php',{
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
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Id</strong></td> 
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Name</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Projects</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Agreement Date</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Visit Date</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Report Date</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Source</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Detail</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Sector</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Unit</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Remaining Balance of Contractual Commitment in Concerned Investment Head at the end of Previous Month</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Claim in Concerned Investment Head in Current Month</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Claim Reimbursed by HIMALI Grant</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>If amount reimbursed does not match with claimed amount then mention Reasons of Revision in Reimbursement</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Balance in Concerned Investment Head in Current Month</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Status of Investment Head in term of Completion of Contractual Commitment</strong></td>
  </tr>
  <tr>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Quantity</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Price per Unit</td>
    <td colspan="2" align="center" bgcolor="#E8F8FF">Total Cost</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Quantity</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Price per Unit</td>
    <td colspan="2" align="center" bgcolor="#E8F8FF">Total Cost</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Quantity</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Price per Unit</td>
    <td colspan="2" align="center" bgcolor="#E8F8FF">Total Cost</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Quantity</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Price per Unit</td>
    <td colspan="2" align="center" bgcolor="#E8F8FF">Total Cost</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#E8F8FF">Grant Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Proponent's Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Grant Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Proponent's Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Grant Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Proponent's Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Grant Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Proponent's Contribution</td>    
  </tr>

      <?php    $sql = "select * from actual_investment "
                    . "where userId = ".$_SESSION['id']
                    . " limit ".$start_from.','.$num_rec_per_page;
                $count = 0;
        	$query = mysql_query($sql);
		while($result = mysql_fetch_array($query))
              {   
                 $count += 1;
                 $ag_date = "select agreement_date_ad,name_add_proponent from projectdetail where project_code = '".$result['project_code']."'";
                 $show_ag_date = mysql_query($ag_date);
                 $show = mysql_fetch_array($show_ag_date);
                 
                 $detail_inv = "select * from investment where project_code = '".$result['project_code']."'";
                 $inv = mysql_query($detail_inv);
                 $inv_result = mysql_fetch_array($inv);
                 
                ?>
      <tr>
    <td align="center" bgcolor="#FFFFFF"><?php echo $count++;?></td>
    <td align="center" bgcolor="#FFFFFF"><div style="width:155px;"><?php echo $show[1]; ?></div></td> 
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['project_code']; ?></td>     
    <td align="center" bgcolor="#FFFFFF"><?php echo $show[0]; ?></td> 
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['visitdate']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['reportdate']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['source']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $inv_result['detail']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $inv_result['sector']?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $inv_result['unit']?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['r_quantity']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['r_price']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['r_gc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['r_pc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['claim_quantity']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['claim_sector']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['claim_rc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['claim_pc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['grant_quantity']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['grant_sector']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['grant_rc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['grant_pc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['Reimbursement_quantity']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['balance_quantity']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['balance_sector']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['balance_rc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['balance_pc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['status']; ?></td>
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
	pagination('actual_investment','show_actual_investment',$num_rec_per_page);    
	////// first if ends here  
	}
	else
header("location:../index.php"); ?> 

<?php include('../inc/footer.php'); ?>

