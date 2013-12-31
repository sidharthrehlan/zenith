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
					<h1>About Us</h1>
					<div id="maintext">
					   <!-- Accordian Element 1 -->
                       <div class="zaccordian">
                           <h3><span></span> Our Vision</h3>
                           <div>
                               <ul>
                                    <li>To make positive changes with our world class training and make individuals ready for the industry.</li>
                                    <li>To be the best in online testing industry.</li>
                                    <li>To be the best in online testing industry.</li>
                                    <li>To be India&apos;s best in the field of content development and management</li>
                               </ul>
                           </div>
                          
                           <!-- Accordian Element 2 -->
                           <h3><span></span> Our Mission</h3>
                           <div>
                               <ul>
                                    <li>Provide finest and best training. </li>
                                    <li>Provide highest quality to the point content.</li>
                                    <li>Help clients to make more informed decisions in testing arena.</li>
                                    <li>Use our vast knowledge to help clients develop better courses and test.</li>
                               </ul>
                           </div>
                           
                           <!-- Accordian Element 3 -->
                           <h3><span></span> Our Logo</h3>
                           <div>
                               <p>Our logo is made up of two open boxes signifies how we create new dimensions for our clients and for the individuals we train. Our logo also form letter &apos;Z&apos; of English alphabet series and is synonymous with our name Zenith. </p>
                           </div>
                           
                           <!-- Accordian Element 4 -->
                           <h3><span></span> Our Colours</h3>
                           <div>
                               <p>Our colours have been chooses keeping in mind our values and believes. Each colour has its own unique importance. The significance of our colours is as:</p>
                               <h4 class="green-text">Green : Growth</h4>
                               <h4 class="yellow-text">Yellow : Clarity, Optimism</h4>
                               <h4 class="blue-text">Blue : Trust, Dependability </h4>
                               <h4 class="purple-text">Purple : Creativity, Imagination</h4>
                           </div>
                           
                            <!-- Accordian Element 5 -->
                           <h3><span></span> Our Founders</h3>
                           <div>
                               <p class="bold">Sunil Palia</p>
                               <p>B.sc. (Mathematics), MCA</p>
                               <p>He is a veteran in the field of training and teaching having a decade long experience of training around 10000 students and a training experience of more than 500 hours. He has authored many books on aptitude as well. He is an expert in evaluating and developing focused training programs and also has an unparallel ability to explain things in an easily understandable way. 
                               </p>
                               <p class="bold">Jitesh Vohra</p>
                               <p>B.E., MBA (Marketing)</p>
                               <p>He has a corporate experience of 2 years working with &apos;Dell International Services&apos; as a Business Development Manager and around 8 years of experience in training and teaching industry. He has authored a wide variety of content as well. He has trained more than 5000 students and with more than 300 hours experience of training. He specializes in various corporate trainings. 
                               </p>
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