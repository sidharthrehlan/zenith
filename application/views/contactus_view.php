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
					<h1>Contact Us</h1>
					<div id="maintext">
					 <p>230, R.G. Mall, Sector-9, Rohini, Delhi-110085</p>
                     <p>(Opp. Dharam Kunj Apartment)</p>
                     <p>Ph: 011 - 42542992,+91 9650103203</p>  
					</div><!-- end maintext -->
				</div><!-- end content -->
			</div><!-- end maincontent -->
    </div><!-- end centercolumn -->
</div><!-- end top container -->
   <?php
  $this->load->view('include/footer_view');
  ?>