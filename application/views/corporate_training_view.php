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
					<h1>Corporate Training</h1>
					<div id="maintext">
					   <p>Our corporate training solutions are :</p>
                       <div class="zaccordian green-header">
                           <!-- Accordian Element 1 --> 
                           <h3><span></span> PRESENTATION SKILLS TRAIINING</h3>
                           <div>
                                <p>Making an effective presentation is one of the prime requirements in corporate sector. Be it a presentation to the customer or a presentation for internal consumption, an effective presentation is always desired. With this premise in mind the experts of Zenith with their vast experience in different corporate settings have developed the presentation skills training program of Zenith focuses on ways of developing and delivering an effective presentation. The program starts with dos and don’ts of making a presentation with samples show to the participants. The next step focuses on discussing the various aspects of delivering an effective presentation. The last step is to bring to test the learned fundamentals by inviting each participant to make a presentation. Our experts give individual feedbacks to each participant and thus enabling them to enhance their skills further. </p>
                           </div>
                           
                           <!-- Accordian Element 2 --> 
                           <h3><span></span> BUSINESS COMMUNICATION SKILLS TRAINING</h3>
                           <div>
                                <p>Communicating your point effectively is the need of every individual. While talking to your boss, talking to your co-workers or while talking to the customers the right message should be put across with the right effect. The business communication training program of Zenith helps you to achieve this goal of correct and effective communication. The program gives an overall view of all the communication channels like e-mails, memos, interviews etc. The candidates are also put into role plays to make them understand the various communication methods and to stress upon the importance of these. </p>
                           </div>
                           
                           <!-- Accordian Element 3 --> 
                           <h3><span></span> MS-OFFICE TRAINING</h3>
                           <div>
                                <p>You are a Manager or a Sales person or a new entrant to any field, MS-OFFICE can work as a support system for making your work life easier. We have a decade long experience in training and usage of MS-OFFICE (all versions including OFFICE 2003, OFFICE 2007 & OFFICE 2010). With our MS-OFFICE training you will not only become the master of these tools but we will also share with you different problems faces in real time by different people and the solutions they got by help of different tools of MS-OFFICE. Our training includes a special module on OUTLOOK, which will change the way you use your mail. </p>
                           </div>
                           
                           
                           <!-- Accordian Element 4 --> 
                           <h3><span></span> MOTIVATIONAL TRAININIG</h3>
                           <div>
                                <p>Motivation and teamwork are important at every level of your organization. If employees of an organization are not adequately motivated then it may result in decrease of productivity of employees and in longer run may hamper the whole organization itself. Zentih with its innovative ways and activities of the motivational workshop can increase the motivation of the employees and will make them work with a re-energized mindset. 
Team building training is another specialty that we have. Combined with different and unique team building activities this training makes the participants develop a sense of team play and cooperation.
</p>
                           </div>
    
                           <!-- Accordian Element 5 --> 
                           <h3><span></span> TIME MANAGEMENT TRAINING </h3>
                           <div>
                                <p>In today's hectic life it becomes very difficult to manage your time among different aspects that need your attention. Ineffective time management leads to variety of issues like loss of productivity, stress, behavioral disorders. With our time management training learn how to effectively take care of all the issues seeking your attention in the limited time you have got. Our time management training will not only help you in managing time effectively in your professional life but will also help you in managing it in your personal life as well. </p>
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