<?php
error_reporting(0);
session_start();

include('db.php');
include('inc/header.php');
include('inc/nav.php');
include('models/show_proposed.php');
 ?>
<script>
	
</script>
<div class="content-wrapper">

<?php
	if(!isset($_SESSION['id']))
	{
		header('Location:index.php');
	}
	else
	{  ?>
        
  <h2 style="color:#069;">Environment Input Form</h2>
  <span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;"><?php
        $query1 = mysql_query("select project_code,name_add_proponent from projectdetail order by project_code asc");
        echo 'Select Project: '.'<select required name="projectid" id="myHref" >';
        echo "<option value='okk' selected>Select</option>";  
        while($data1 = mysql_fetch_array($query1)){
        	 $projct = $data1[0];
        echo "<option value=\"$projct\">$data1[0]</option>";  }           
        echo '</select>';   
        ?></span> 
         <script>
   $(document).ready(function() {

		$('#myHref').change(function(){
		  var value = $('#myHref').val();
		  var table = $('#table').val();
		$.get('proposed/get_envt_selected.php',{
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
        
        
        <?php 
		
		$userId = $_SESSION['id'];
		$num_rec_per_page=15;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 

$start_from = ($page-1) * $num_rec_per_page; 


		$result = select_limit_pagination_forprojectdetail('investment',$start_from,$num_rec_per_page,$userId);
		
		?>
	<form>
        <table width="100%" cellpadding="5" cellspacing="1" bgcolor="#999">
  <tr>
    <td align="center" bgcolor="#D0D0E8"><strong>SN</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Detail</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Sector</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Environment Management</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Unit</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Quality</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Price Per Unit</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Grant Contribution</strong></td>
    <td align="center" bgcolor="#D0D0E8"><strong>Proponent Contribution</strong></td>
    </tr>
    <input type="hidden" value="investment" id="table" />           
    <?php $count = $start_from+1 ;
    while($data = mysql_fetch_array($result))
    { ?>
    <tr>
    <td align="center"><?php echo $count++;?></td>
    <td height="30" align="center"><input type="text" name="detail" value="<?php echo $data['detail'];?>" disabled="disabled" /></td>
    <td height="30" align="center"><input type="text" name="detail" value="<?php echo $data['sector'];?>" disabled="disabled" /></td>
    <td align="center"><select name="select_account[]">
      <option value="">Sector...</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select></td>
    <td height="30" align="center"><input type="text" name="detail" value="<?php echo $data['unit'];?>" disabled="disabled" /></td>
    <td height="30" align="center"><input type="text" name="detail" value="<?php echo $data['quality'];?>" disabled="disabled" /></td>
    <td height="30" align="center"><input type="text" name="detail" value="<?php echo $data['per_unit'];?>" disabled="disabled" /></td>
    <td height="30" align="center"><input type="text" name="detail" value="<?php echo $data['grant_contribution'];?>" disabled="disabled" /></td>
    <td height="30" align="center"><input type="text" name="detail" value="<?php echo $data['Proponent_contribution'];?>" disabled="disabled" /></td>
</tr><?php } 	?></table>
	</form>	

<div class="clear"></div>
    


<?php 	
 } ?> </div>
 <div class="clear"></div><br />
<?php  include('inc/footer.php'); ?>
</html>


