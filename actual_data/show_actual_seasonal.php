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
	header('Location:../index.php');
	else
	{
	  include '../get_projectCode.php'; 
	?>
     
  <h2 style="color:#069;">Actual Regular Employee List</h2>
  <span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;"><?php
      $query1 = mysql_query("select project_code,name_add_proponent from projectdetail "); 
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
		  var table = $('#table').val();
		  var myId = $('#myId').val();
		$.get('get_selected_seasonal.php',{
			id:value,
			sessionId:myId,
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
        
        <?php
		$userId = $_SESSION['id'];
		$num_rec_per_page=15;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 

$start_from = ($page-1) * $num_rec_per_page; 

		$result = select_limit_pagination_forprojectdetail('actual_seasonal',$start_from,$num_rec_per_page);   ?>
        <table id="dataTable" width="100%" cellpadding="3" cellspacing="1" bgcolor="#333333">
  <tr>
    <td height="100" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
    <td height="100" align="center" bgcolor="#E8F8FF"><strong>Name</strong></td>
    <td height="100" align="center" bgcolor="#E8F8FF"><strong>Project</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Agreement Date</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Visit Date</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Report Date</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Source</strong></td>    
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Types of Employee</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Sex of Employee</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Caste and Ethnicity</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Family Member</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Local Employee</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>No. of Month Worked</strong></td>
    <td align="center" bgcolor="#E8F8FF"><strong>Salary per Month<br />
  In Cash (NRs.)</strong></td>
  <td height="50" align="center" bgcolor="#E8F8FF"><strong>Total Salary of Reporting Month (NRs.)</strong></td>
  </tr>
  <input type="hidden" value="actual_seasonal" id="table" />
  <input type="hidden" value="<?php echo $_SESSION['id'];?>" id="myId" />
    	<?php $count = $start_from+1;
				while($data = mysql_fetch_array($result))
				  { 
                    $pjt = $data['project_code'];
                    $sql = "select agreement_date_ad,name_add_proponent from projectdetail where project_code = '{$pjt}'";
                    $query = mysql_query($sql);
                    $agre_date = mysql_fetch_array($query); 
                ?>
  <tr>
        <td align="center"><?php echo $count++;?></td>
        <td height="30" align="center"><div style="width:150px;"><?php echo $agre_date[1];?></div></td>
        <td height="30" align="center"><?php echo $pjt;?></td>
        <td height="30" align="center"><?php echo $agre_date[0];?></td>
        <td height="30" align="center"><?php echo $data['visit_date'];?></td>
        <td height="30" align="center"><?php echo $data['report_month'];?></td>
        <td height="30" align="center"><?php echo $data['source'];?></td>
        <td height="30" align="center"><?php echo $data['employee'];?></td>   
        <td height="30" align="center"><?php echo $data['sex'];?></td>
        <td height="30" align="center"><?php echo $data['caste'];?></td>
        <td height="30" align="center"><?php echo $data['family'];?></td>
        <td height="30" align="center"><?php echo $data['local'];?></td>
        <td height="30" align="center"><?php echo $data['worked_month'];?></td>
        <td align="center"><?php echo $data['incash'];?></td>
        <td height="30" align="center"><?php echo $data['total_salary'];?></td>
  </tr>
      <?php } 	?>

  </table>

<div class="clear"></div>

<?php include('pagination.php');
	if(isset($thisForpagination) == 'yes')
	  pagination_condition('actual_seasonal','show_actual_seasonal',$num_rec_per_page);	
	else
	  pagination('actual_seasonal','show_actual_seasonal',$num_rec_per_page,$projct);	
 
 }   //// END of first else 
?> </div>

<br />
<?php include('../inc/footer.php'); ?>
</html>
