  <select id="MyMenu" name="show_menu">
<?php
error_reporting(0);
 $id = $_GET['id'];
?>
<?php 

	switch($id)
	{
		case 'input':	
		{ ?>
        
	<option value="feeder">Feeder</option>
      <option value="fertilizer">Fertilizer</option>
      <option value="seeds">Seeds</option>
      <option value="medicine">Medicine</option>
      <option value="pesticide">Pesticide</option>
      <option value="insecticide">Insecticide</option>
      <option value="other1">Other(1)</option>
      <option value="other2">Other(2)</option>
      			
	<?php break; }	
	case 'marketing':	
		{ ?>
       
      <option value="transport">Transport</option>
      <option value="promotion_advertisement">Promotion and Advertisement</option>
      <option value="packing">Packing</option>
      <option value="distribution">Distribution</option>
      <option value="storage">Storage</option>
      <option value="insurance">Insurance</option>
      <option value="other1">Other(1)</option>
      <option value="other2">Other(2)</option>       					
	<?php break; }	
	case 'lease':	
		{ ?>
       
      <option value="firewood">Firewood</option>
      <option value="kerosene">Kerosene</option>
      <option value="petrol">Petrol</option>
      <option value="diesel">Diesel</option>
      <option value="electricity">Electricity</option>
      <option value="Water">Water</option>
      <option value="other1">Other(1)</option>
      <option value="other2">Other(2)</option>

	<?php break; }	
	case 'labor':	
		{ ?>
       
	<option value="full_time">Full Time</option>
      <option value="seasonal">Seasonal</option>
      						
	<?php break; }	
	case 'MAPs':	
		{ ?>
      <option value="Civil work">Civil works</option>
      <option value="Machinery and Equipments">Machinery and Equipments</option>
      				
	<?php break; }	
	?>
      
	   
      				
	<?php 	
		
	}


 ?>
	</select>	
