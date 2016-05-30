<div id="actual_header">   
  
  <span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;"><?php
        $query1 = mysql_query("select project_code,name_add_proponent from projectdetail order by project_code asc"); ?>
        Select Project: <select name="projectid" id="myHref" required>
        			<option value='' selected>Select</option>
       <?php while($data1 = mysql_fetch_array($query1)){
        	 $projct = $data1[0];			 
			 
        echo "<option value=\"$projct\">$projct</option>";  }  ?>  
              
        </select>   
        </span>
        
         
   
 
</div>