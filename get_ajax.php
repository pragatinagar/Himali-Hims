  <select id="MyMenu" name="show_menu">
<?php
 $id = $_GET['id'];
?>
<?php 

	switch($id)
	{
		case 'Livestrock':	
		{ ?>
        
	  <option value="Yak">Yak/Chauri Husbandry</option>
      <option value="Goat">Goat Husbandry</option>
      <option value="Changra">Changra Husbandry</option>
      <option value="Sheep">Sheep Husbandry</option>
      <option value="Pigery">Pigery</option>
      <option value="Rular">Rular Poultry/Hatchery</option>
      <option value="Cattle">Cattle/Buffalo Farming</option>
      <option value="Mule">Mule</option>
      <option value="Milk">Milk</option>
      <option value="Yak">Yak Cheese</option>
      <option value="Wool">Wool, Pasmina</option>
      <option value="Meat">Meat</option>
      <option value="Livestrock_other">Other</option>	
      			
	<?php break; }	
	case 'Fishery':	
		{ ?>
       
	  <option value="Rainbow">Rainbow Trout Production</option>
      <option value="Fingerlings">Fingerlings Production</option>
       					
	<?php break; }	
	case 'Vegitable':	
		{ ?>
       
	  <option value="Fresh">Fresh Vegitable</option>
      <option value="Vegitable">Vegitable Sees</option>
      <option value="Spices">Spices</option>
      <option value="Cardamom">Cardamom</option>
      <option value="Potato">Potato</option>
      <option value="Beans">Beans</option>
      <option value="Mushroom">Mushroom</option>
      <option value="Vegitable_other">Other</option>	
   					
	<?php break; }	
	case 'Fruits':	
		{ ?>
       
	 <option value="Apple_pro">Apple Production</option>
      <option value="Citrus">Citrus(Orange)</option>
      <option value="Kiwi">Kiwi</option>
      <option value="Pomegrante">Pomegrante(Anar)</option>
      <option value="Apple_nurs">Apple Nursery</option>
      <option value="Fruit_nurs">Fruit Nursery</option>
      <option value="Fruit_other">Other</option>
      						
	<?php break; }	
	case 'MAPs':	
		{ ?>
       <option value="Allo">Allo</option>
	  <option value="Chiraito">Chiraito</option>
      <option value="Jatamasi">Jatamasi</option>
      <option value="Saffron">Saffron</option>
      <option value="Seabuck">Seabuck Thorn</option>
      <option value="Hm">Hm Paper</option>
      <option value="Jaributi_production">Jaributi Production</option>
      <option value="Jaributi_Nursery">Jaributi Nursery</option>	
      <option value="Jaributi_Processing">Jaributi Processing</option>	
      <option value="Jaributi_other">Jaributi Others</option>	
      				
	<?php break; }	
	
	case 'Miscellaneous':	
		{ ?>
      
	   <option value="Rainbow">Rainbow Trout</option>
      <option value="Bee">Bee</option>
      <option value="Herbal">Herbal Tea</option>
      <option value="Bakery">Bakery</option>
      <option value="Miscellaneous_other">Other</option>
      				
	<?php break; }	
		
	}


 ?>
	</select>	
