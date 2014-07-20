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

    <div class="infoForm" id="validatorEnabledForm">
      <form role="form" class="form-horizontal" name="info" id="info" method="post">
          <div  class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-8 col-md-6">
              <input class="form-control" type="text" name="name" id="name" require="require" placeholder="Name" />
            </div>
          </div><!-- end form-group -->
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-8 col-md-6">
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
          </div><!-- end form-group -->

          <div class="form-group">
            <label for="mobile" class="col-sm-2 control-label">Mobile</label>
            <div class="col-sm-8 col-md-6">
              <input type="text" class="form-control" id="mobile" placeholder="Mobile">
            </div>
          </div><!-- end form-group -->
          
          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-8 col-md-6">
              <textarea class="form-control" id="mobile" placeholder="Mobile"></textarea>
            </div>
          </div><!-- end form-group -->
          <div class="form-group">
              <div class="col-sm-offset-2 col-sm-8">
                <input type="submit" class="btn btn-default" value="Submit" name="submit">
              </div>
          </div>
    </form>


    </div>


    </div><!-- end centercolumn -->
</div><!-- end top container -->
   <?php
  $this->load->view('include/footer_view');
  ?>