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
					<h1>Careers at Zenith</h1>
					<div id="maintext">
					   <p>At Zenith we always look for the best experienced skills to match with our company's mission. Bright talent and skills set can always find their talent being utilized to the core at Zenith. As training is the heart of our business we are in a constant look out for trainers who can work with us in full time/part time/freelance mode for the class room training and corporate training in all of our courses. We are always open for new trainers in both existing areas and new areas. </p>
                       <p>Currently we are looking for Trainers with following skill sets:</p>
                       <ul>
                            <li>Quantitative Aptitude</li>
                            <li>Data Interpretation &amp; Analysis</li>
                            <li>Logical &amp; Analytical Reasoning</li>
                            <li>Verbal</li>
                            <li>Spoken English</li>
                            <li>Soft Skills</li>
                            <li>Personality Development</li>
                       </ul>
                       <p>If you are looking out for a career with us, send your CV's to <a href="mailto:jobs@zenithindia.org">jobs@zenithindia.org</a></p>
                       
                    </div><!-- end maintext -->
				</div><!-- end content -->
			</div><!-- end maincontent -->
    </div><!-- end centercolumn -->
</div><!-- end top container -->
   <?php
  $this->load->view('include/footer_view');
  ?>