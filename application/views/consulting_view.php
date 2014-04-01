 <?php
    $data['home_page'] = 'about';
    $this->load->view('include/header_view',$data);
 ?>
<div id="top_container_inner">    
	<div class="centercolumn"> 
 <?php   
    $this->load->view('include/headertop_view',$data);
    $this->load->view('include/navigation_view',$data);
 ?>
            <div id="maincontent">
				<div id="content">
					<h1>Consulting</h1>
					<div id="maintext">
                        <p>With its long and varied experience in the field of education, Zenith provides a variety of consulting solutions. We have experience in developing content manuals, questions and item cleaning for various examinations. We have delivered our consulting expertise to various educational institutes and various educational firms including the World's largest educational company. We also have a vast experience in developing be-spoke training programs for various educational and corporate institutions. </p>
                        <h3>Our consulting solutions are</h3>
                        <div class="zaccordian green-header">
                            <!-- Accordian Element 1 --> 
                            <h3 id="aptitude-training"><span></span>ASSESSMENT DEVELOPMENT</h3>
                            <div>
                                <p>Assessment is always the first and last step of any learning program. Zenith has a varied experience of developing end to end assessment solutions. Our assessment development starts with understanding the requirements of the client, what the client wants to get out of the assessment or what needs to be checked. Then we convert the requirement into a plan which elaborates the needs and the parameters to be checked. Once this is finalized we develop a plan which includes handbook containing information about various parameters and how to check them. The next step is item development in which we develop an assessment test based on the parameters agreed. Finally the assessment is conducted and results are analyzed as per the client requirement. The results are then shared with the client. Zenith also has experience in being a partner to World's Largest Assessment Solutions Firm for a National Level Management Entrance Test. </p>
                            </div> 
                             <!-- Accordian Element 2 --> 
                            <h3 id="personal-development"><span></span> TRAINING REQUIREMENT ASSESSMENT</h3>                                
                            <div>
                                <p>Many a times institutions/organizations want to organize trainings for their students/employees but they are not sure of what the training should be all about. At this point the experts of Zenith help the institute/organization to understand the need to the training and decide the nature of training that needs to be delivered to the participants. Zenith has done training requirement assessment for various colleges, universities and organizations. </p>                             
                            </div>     
                        </div>
                    </div><!-- end maintext -->
				</div><!-- end content -->
			</div><!-- end maincontent -->
    </div><!-- end centercolumn -->
</div><!-- end top container -->
   <?php
  $this->load->view('include/footer_view');
  ?>