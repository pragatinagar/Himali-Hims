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
   
    <div id="projectDetail"> </div>  
     <div class="clear"></div>      
    <br />
        
    <div class="fl"><strong>Date of Visit:</strong><br />
    <input type="text" id="visitDate" name="visitdate" style="width:200px" onblur="compareReporting()" placeholder="YYYY/MM/DD" /></div>
        
    <div class="fr"><strong>Month of Reporting:</strong><br />
    <input type="text" id="reportDate" name="reportdate" style="width:200px" onblur="compareReporting()" placeholder="YYYY/MM/DD" /></div>
     <div class="clear"></div> 
     <br />     
            
    <h3 style="color:#069;">Source of Information:</h3>
    <div class="dropdown">
   <select name="source" onchange="hideEmployee()" id="hide" class="dropdown-select">
   <option value="">Select</option>
   <option value="Agribuiness Diary">Agribuiness Diary</option>
   <option value="Interview with Owner">Interview with Subproject Owner</option>
   <option value="Agribuiness and Interview with Subproject Owner">Agribuiness Interview</option>
   <option value="Other">Other</option>
   </select></div>
   <br />
<br />
</div>