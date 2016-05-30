<main>  <?php if(isset($_SESSION['id']))
       {	
               ?>
<?php 
 if((basename($_SERVER['PHP_SELF']) == 'main_page.php') or (basename($_SERVER['PHP_SELF']) == 'operate_exp.php') or (basename($_SERVER['PHP_SELF']) == 'revenue.php') or (basename($_SERVER['PHP_SELF']) == 'labor.php') or (basename($_SERVER['PHP_SELF']) == 'seasonal_employer.php') or (basename($_SERVER['PHP_SELF']) == 'investment.php'))
  			{
					echo '<input id="tab1" type="radio" name="tabs" checked>';
					echo '<label for="tab1">Proposed</label>';
					echo '<input id="tab2" type="radio" name="tabs">';
 				    echo '<label for="tab2">Show Proposed Data</label>';
					echo '<input id="tab3" type="radio" name="tabs">';
 				    echo '<label for="tab3">Actual</label>';
					echo '<input id="tab4" type="radio" name="tabs" >';
 				    echo '<label for="tab4">Show Actual Data</label>';			
			}
		 if((basename($_SERVER['PHP_SELF']) == 'edit_proposed_revenue.php') or (basename($_SERVER['PHP_SELF']) == 'edit_proposed_labor.php') or (basename($_SERVER['PHP_SELF']) == 'edit_proposed_investment.php') or (basename($_SERVER['PHP_SELF']) == 'edit_proposed_expences.php') or (basename($_SERVER['PHP_SELF']) == 'edit_proposed_project.php') or (basename($_SERVER['PHP_SELF']) == 'show_proposed_project.php') or (basename($_SERVER['PHP_SELF']) == 'show_proposed_expences.php') or (basename($_SERVER['PHP_SELF']) == 'show_proposed_revenue.php') or (basename($_SERVER['PHP_SELF']) == 'show_proposed_labor.php') or (basename($_SERVER['PHP_SELF']) == 'show_proposed_investment.php'))
			{	
			       	echo '<input id="tab1" type="radio" name="tabs" >';
					echo '<label for="tab1">Proposed</label>';
					echo '<input id="tab2" type="radio" name="tabs" checked>';
 				    echo '<label for="tab2">Show Proposed Data</label>';
					echo '<input id="tab3" type="radio" name="tabs" >';
 				    echo '<label for="tab3">Actual</label>';	
					echo '<input id="tab4" type="radio" name="tabs" >';
 				    echo '<label for="tab4">Show Actual Data</label>';			
			}
		 if((basename($_SERVER['PHP_SELF']) == 'actual_expances.php') or (basename($_SERVER['PHP_SELF']) == 'actual_investment.php') or (basename($_SERVER['PHP_SELF']) == 'actual_regular.php') or (basename($_SERVER['PHP_SELF']) == 'actual_seasonal.php') or (basename($_SERVER['PHP_SELF']) == 'output_revenue.php'))
			{
			 	    echo '<input id="tab1" type="radio" name="tabs" >';
				    echo '<label for="tab1">Proposed</label>';
                                    
				    echo '<input id="tab2" type="radio" name="tabs" >';
 				    echo '<label for="tab2">Show Proposed Data</label>';
                                    
				    echo '<input id="tab3" type="radio" name="tabs" checked >';
 				    echo '<label for="tab3">Actual</label>';
                                    
				    echo '<input id="tab4" type="radio" name="tabs" >';
 				    echo '<label for="tab4">Show Actual Data</label>';			

					
			}
    	if ((basename($_SERVER['PHP_SELF']) == 'show_actual_investment.php') or (basename($_SERVER['PHP_SELF']) == 'show_actual_expances.php') or (basename($_SERVER['PHP_SELF']) == 'show_actual_regular.php') or (basename($_SERVER['PHP_SELF']) == 'show_actual_seasonal.php') or (basename($_SERVER['PHP_SELF']) == 'show_actual_outputRevenue.php'))
			{	
			       	    echo '<input id="tab1" type="radio" name="tabs" >';
                                    echo '<label for="tab1">Proposed</label>';
                                        
				    echo '<input id="tab2" type="radio" name="tabs">';
                                    echo '<label for="tab2">Show Proposed Data</label>';
                                         
                                    echo '<input id="tab3" type="radio" name="tabs" >';
                                    echo '<label for="tab3">Actual</label>';	
                                         
                                    echo '<input id="tab4" type="radio" name="tabs" checked >';
                                    echo '<label for="tab4">Actual Regular Employee</label>';	
                                   
			} ?>
			

      
       <div class="fr mr" style="text-align:right;">

       <strong>Welcome <?php echo $_SESSION['user'];?></strong> 
       <br />

       <a href="<?php echo base_url;?>signout.php">Signout</a></div>
      

         <section id="content1">    
       <div class="menu">
        <a href="<?php echo base_url;?>main_page.php" <?php if(basename($_SERVER['PHP_SELF']) == 'main_page.php'){ echo 'class="active"';} ?> >Sub-Project Detail</a><a href="<?php echo base_url;?>operate_exp.php" <?php if(basename($_SERVER['PHP_SELF']) == 'operate_exp.php'){ echo 'class="active"';} ?>>Operating Expences</a><a href="<?php echo base_url;?>revenue.php" <?php if(basename($_SERVER['PHP_SELF']) == 'revenue.php'){ echo 'class="active"';} ?>>Revenue</a><a href="<?php echo base_url;?>labor.php" <?php if(basename($_SERVER['PHP_SELF']) == 'labor.php'){ echo 'class="active"';} ?> >Labor And Employee</a><a href="<?php echo base_url;?>investment.php" <?php if(basename($_SERVER['PHP_SELF']) == 'investment.php'){ echo 'class="active"';} ?>>Investment</a>

       </div>
         </section>

         <section id="content2">  
       <div class="menu">
         <a href="<?php echo base_url;?>proposed/show_proposed_project.php" <?php if(basename($_SERVER['PHP_SELF']) == 'show_proposed_project.php'){ echo 'class="active"';} ?>>Show Projects</a><a href="<?php echo base_url;?>proposed/show_proposed_expences.php" <?php if(basename($_SERVER['PHP_SELF']) == 'show_proposed_expences.php'){ echo 'class="active"';} ?>>Show Proposed Expences</a><a href="<?php echo base_url;?>proposed/show_proposed_revenue.php" <?php if(basename($_SERVER['PHP_SELF']) == 'show_proposed_revenue.php'){ echo 'class="active"';} ?>>Show Proposed Revenue</a><a href="<?php echo base_url;?>proposed/show_proposed_labor.php" <?php if(basename($_SERVER['PHP_SELF']) == 'show_proposed_labor.php'){ echo 'class="active"';} ?>>Show Proposed Labor</a><a href="<?php echo base_url;?>proposed/show_proposed_investment.php" <?php if(basename($_SERVER['PHP_SELF']) == 'show_proposed_investment.php'){ echo 'class="active"';} ?>>Show Proposed Investment</a>
       </div>
         </section>

         <section id="content3">  
       <div class="menu">
        <a href="<?php echo base_url;?>actual/actual_regular.php" <?php if(basename($_SERVER['PHP_SELF']) == 'actual_regular.php'){ echo 'class="active"';} ?>>Regular Employment</a><a href="<?php echo base_url;?>actual/actual_seasonal.php" <?php if(basename($_SERVER['PHP_SELF']) == 'actual_seasonal.php'){ echo 'class="active"';} ?>>Seasonal Employment</a><a href="<?php echo base_url;?>actual/output_revenue.php" <?php if(basename($_SERVER['PHP_SELF']) == 'output_revenue.php'){ echo 'class="active"';} ?>>Output and Revenue</a><a href="<?php echo base_url;?>actual/actual_expances.php" <?php if(basename($_SERVER['PHP_SELF']) == 'actual_expances.php'){ echo 'class="active"';} ?>>Actual Expances</a><a href="<?php echo base_url;?>actual/actual_investment.php" <?php if(basename($_SERVER['PHP_SELF']) == 'actual_investment.php'){ echo 'class="active"';} ?>>Actual Investment</a>

       </div>
         </section>

         <section id="content4">  
       <div class="menu">
         <a href="<?php echo base_url;?>actual_data/show_actual_regular.php" <?php if(basename($_SERVER['PHP_SELF']) == 'show_actual_regular.php'){ echo 'class="active"';} ?>>Show Regular Employee</a><a href="<?php echo base_url;?>actual_data/show_actual_seasonal.php" <?php if(basename($_SERVER['PHP_SELF']) == 'show_actual_seasonal.php'){ echo 'class="active"';} ?>>Show Seasonal Employee</a><a href="<?php echo base_url;?>actual_data/show_actual_outputRevenue.php" <?php if(basename($_SERVER['PHP_SELF']) == 'show_actual_outputRevenue.php'){ echo 'class="active"';} ?>>Show Actual Revenue</a><a href="<?php echo base_url;?>actual_data/show_actual_expances.php" <?php if(basename($_SERVER['PHP_SELF']) == 'show_actual_expances.php'){ echo 'class="active"';} ?>>Show Actual Expances</a><a href="<?php echo base_url;?>actual_data/show_actual_investment.php" <?php if(basename($_SERVER['PHP_SELF']) == 'show_actual_investment.php'){ echo 'class="active"';} ?>>Show Actual Investment</a>
       </div>
         </section>

       <?php } ?></main>
    
  
