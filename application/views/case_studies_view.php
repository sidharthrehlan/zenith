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
					<h1>Case Studies</h1>
					<div id="maintext">
					   <p>lipsome ......</p>
                       
                       
                    </div><!-- end maintext -->
				</div><!-- end content -->
			</div><!-- end maincontent -->
    </div><!-- end centercolumn -->
</div><!-- end top container -->
   <?php
  $this->load->view('include/footer_view');
  ?>