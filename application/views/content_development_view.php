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
					<h1>Content Development Solutions</h1>
					<div id="maintext">
					   <p>Zenith has an expertise and experience in authoring online &amp; offline course content and lesson plans for areas like Aptitude, English, Personality Development and K12. Online e-content development is one of the key areas of Zenith. We have over 25 qualified Subject Matter Experts (SME's) in different areas with experience and skills in developing online courses across all subject areas. Our quality assurance process is stringent and helps us offer quality-based solutions. Zenith is the preferred vendor for content related to services to some of the world's largest Educational and online assessment companies. Our content solutions deliver the following advantages to our clients:</p>
                       <ul>
                            <li>Qualified &amp; Experienced Subject Matter Experts</li>
                            <li>Quality Solutions</li>
                            <li>Cost Effectiveness</li>
                            <li>Quick Turnaround Time</li>
                       </ul>
                       <h3>Our Content Development Process</h3>
                       <div class="content-dev-process">
                            <img src="<?php echo base_url(); ?>media/content_development.jpg" alt="Content development processs" title="Content developemnt process" />
                            <div><a href="<?php echo base_url(); ?>document/content_development_process.pdf">Read our content development process in detail</a></div>
                       </div>
                       <h3>Our bouquet of content related services contains</h3>
                       <div class="zaccordian">
                           <!-- Accordian Element 1 --> 
                           <h3><span></span> Topic Specific Content Development Solutions</h3>
                           <div>
                                <p>The topics specific content development solutions of Zenith focuses on the specific topic wise needs of the client. Zenith has a large database of topic wise content to help its clients. We also prepare new topic wise content on variety of topics of Quantitative Aptitude, Logical Reasoning, Data Interpretation, Data Sufficiency, Verbal Ability, English Language, Mathematics etc.</p>
                           </div>
                           
                           <!-- Accordian Element 2 --> 
                           <h3><span></span> Test Item Development Solutions</h3>
                           <div>
                                <p>Zenith is the preferred vendor of the world's largest education and online assessment company for development of test items for a prestigious MBA entrance examination in India. We also create test items for India's largest assessment company for a variety of entrance and aptitude examinations conducted by them. So far Zenith has successfully developed &amp; delivered more than 3000 test items.</p>
                           </div>
                           
                           <!-- Accordian Element 3 --> 
                           <h3><span></span> Content Validation Solutions</h3>
                           <div>
                                <p></p>
                           </div>
                           
                           
                           <!-- Accordian Element 4 --> 
                           <h3><span></span> End to End Content Management</h3>
                           <div>
                                <p>From understanding the requirements to creating the content, from storage of the content to reusability of the content, from updation of content to changing the content our end to end content management services do it all as per our client requirements. Our end to end content management related solutions takes all your worries related to content and let you focus on the core activities of your business.</p>
                           </div>
    
                           <!-- Accordian Element 5 --> 
                           <h3><span></span> Online Course Curriculum Development</h3>
                           <div>
                                <p>With its decade long experience in training and teaching, Zenith provides the best quality course curriculum development services. Zenith brings in their immense experience to understand the requirements of their clients for the online course and develops a curriculum right from the scratch to meet the expectations of the client.</p>
                           </div>
                           
                           <!-- Accordian Element 6 --> 
                           <h3><span></span> Content Conversion Solutions</h3>
                           <div>
                                <p>Zenith provides conversion services for any format of data whether printed or electronic or in any other digital output format. Experience SME's of Zenith produce the data in the desired format. The data conversion is done with highest quality standards and checks. Zenith has expertise in tagging, indexing, labeling of data for preparing the data to be published in wide variety of forms like PD's, e-books, digit journals, websites and many more. </p>
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