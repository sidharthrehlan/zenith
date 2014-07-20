<!DOCTYPE html>
	<head>
	
    <link rel="icon" type="image/png" href="<?php echo base_url();?>media/favicon.png" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" /> 
    
    <title><?php echo $this->config->item('siteName'); ?> :: <?php if(isset($title))echo $title; ?></title>
    <meta name="title" content="Zenith Consultant" />
    <meta name="keywords" content="Zenith Consultant" />
    <meta name="description" content="Zenith Consultant" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <link rel="shortcut icon" href="<?php echo base_url();?>media/favicon.png" type="image/png" />
    
    <link href="<?php echo base_url();?>style/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>style/main.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>style/responsive.css" rel="stylesheet" type="text/css" />
    <?php if(isset($bootstrapCss) && $bootstrapCss != null){ ?>
        <link href="<?php echo base_url();?>style/<?php echo $bootstrapCss; ?>" rel="stylesheet" type="text/css" />
    <?php } ?>
    
    <!--[if IE]>                                                 
    <link href="css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->
	</head>
<body class="<?php echo $current_page; ?>">
        