 <?php
    $data['home_page'] = 'home';
    $this->load->view('include/header_view',$data);
 ?>
<div id="top_container" class="clearfix">    
	<div class="centercolumn"> 
 <?php   
    $this->load->view('include/headertop_view',$data);
    $this->load->view('include/navigation_view',$data);
    $this->load->view('include/slider_view');
 ?>
        <div id="maincontent" class="clearfix">
            <div class="box-left">
        		<div id="box_container" class="clearfix">
        			<div class="box education-train-box">
                 	    <h2> EDUCATIONAL TRAININGS</h2>
        				<p>We provide a variety of trainings ranging from Aptitude, PDP, Technical &amp; Train the Trainer Trainings.</p>
                        <p><a href="<?php echo site_url('education-training'); ?>">Read More</a></p>
        			</div><!-- end box -->
        			<div class="box last online-train-box">
                        <h2>ONLINE TRAININGS</h2>
        				<p>Zenith offers novice, intermediate, and advanced workshops to help you get the most out of your Zenith experience.</p>
                        <p><a href="<?php echo site_url('education-training'); ?>">Read More</a></p>
               		</div><!-- end box -->
       			</div><!-- end box container -->
                <div id="box_container" class="clearfix">
        			<div class="box nomargin content-solution-box">
                 	    <h2>CONTENT SOLUTIONS</h2>
        				<p>Zenith has an expertise and experience in authoring online &amp; offline course content and lesson plans for Aptitude, English, Personality development and K12.</p>
                        <p><a href="<?php echo site_url('content-development'); ?>">Read More</a></p>
        			</div><!-- end box -->
        			<div class="box last consulting-box">
                        <h2>CONSULTING SOLUTIONS</h2>
        				<p>We provide a variety of consulting solutions ranging from Assessment, Development and Audit Solutions. </p>
                        <p><a <?php echo site_url('consulting'); ?>>Read More</a></p>
               		</div><!-- end box -->
        		</div><!-- end box container -->
                <div id="box_container" class="clearfix">
                    <div class="box corporate-box">
        				<h2>CORPORATE TRAININGS</h2>
        				<p>Zenith has an expertise and experience in providing various skill based training, motivational & team building trainings and MS OFFICE based trainings.</p>
                        <p><a href="<?php echo site_url('corporate-training');?>">Read More</a></p>
        			</div><!-- end box -->
    	            <div class="box last train-trainer-box">
        			 <h2>Train The Trainer</h2>
        				<p>Train the Trainer programs being on the either side of the table.</p>
                        <p><a href="<?php echo site_url('education-training'); ?>">Read More</a></p>
        			</div><!-- end box -->
        
                </div>
            </div><!-- end box-left -->
            
            <div class="box-right">
                <h3></h3>
            </div><!-- end box-right -->
       	</div><!-- end maincontent -->
    </div><!-- end centercolumn -->
</div><!-- end top container -->
   <?php
  $this->load->view('include/footer_view');
  ?>