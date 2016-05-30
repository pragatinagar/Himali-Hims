<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PMIS</title>
<?php define('base_url', 'http://' . $_SERVER['SERVER_NAME'] . '/hims/');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url;?>css/form.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url;?>css/responsive-tab.css"/>   
    
<link rel="stylesheet" type="text/css" href="<?php echo base_url;?>css/dropdown-select-menu.css"/>
<link href="<?php echo base_url;?>images/gov-logo.png" rel="shortcut icon" type="image/x-icon" />
<script src="<?php echo base_url;?>js/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url;?>js/dropdown-script.js"></script>

<script>
$(function () {		/// this is for preventing from pressing enter 
  $('#regForm').on('keyup keypress', "input", function(e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) {
    //  alert("Na na na! You can't press Enter!");
      e.preventDefault();
      return false;
    }
  });
});
</script>

</head>

<body>

<div id="admin-wrapper">

<div id="login-header">

<img src="<?php echo base_url;?>images/gov-logo.png" align="absmiddle" width="40" />
<br />
Government of Nepal<br />
Ministry of Livestock Development<br />
Department of Livestock Services<br />
<h1>High Mountain Agri-business and Livelihood Improvement (HIMALI) Project</h1>

<h2>Project Management Information System (PMIS)</h2>

</div>

