<div id="topmenu" class="clearfix">
	<div id="nav">
    <ul>
        <li><a <?php if(isset($current_page) && $current_page =='home') { ?> class="active" <?php } ?> href="<?php echo site_url(); ?>">Home</a></li>
        <li><a <?php if(isset($current_page) && $current_page =='about') { ?> class="active" <?php } ?> href="<?php echo site_url('about'); ?>">About Us</a></li>
        <li><a <?php if(isset($current_page) && $current_page =='education_training') { ?> class="active" <?php } ?> href="<?php echo site_url('education-training'); ?>">Educational Training</a></li>
        <li><a <?php if(isset($current_page) && $current_page =='corporate_training') { ?> class="active" <?php } ?> href="<?php echo site_url('corporate-training'); ?>" >Corporate Training</a></li>
        <li><a <?php if(isset($current_page) && $current_page =='content_development') { ?> class="active" <?php } ?> href="<?php echo site_url('content-development'); ?>" >Content</a></li>
        <li><a <?php if(isset($current_page) && $current_page =='consulting') { ?> class="active" <?php } ?> href="<?php echo site_url('consulting'); ?>" >Consulting</a></li>
        <li><a <?php if(isset($current_page) && $current_page =='careers') { ?> class="active" <?php } ?> href="<?php echo site_url('careers'); ?>" >Careers</a></li>
      </ul>
	</div><!-- end nav -->
</div>