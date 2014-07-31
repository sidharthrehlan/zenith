<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Utility
 * class for general  utitity of the project
 * @package yezzcontrol
 * @author Admin
 * @copyright 2011
 * @version $Id$
 * @access public
 */
class Utility {
    
    var $CI;

   /**
    * Utility::__construct()
    * @function constructor of utility library class
    * @return void
    */
   public function __construct(){
        $this->CI = &get_instance();
        $this->CI->load->helper('url');
        $this->CI->load->library('session');
        $this->setLanguage();
   }
   /**
    * Utility::set_log()
    * @function insert log to data base
    * @param mixed $type
    * @param mixed $message
    * @return void
    */
   public function set_log($type,$message){
    
        $query = $this->CI->db->query("SELECT logTypeId FROM tbl_log_type where logType='$type'");
        $row = $query->row();
        $row->logTypeId; 
        if(is_numeric($row->logTypeId)){
            $log_data = array('description'=>$message,
                'usrId'=>$this->CI->session->userdata('usrId'),
                'ipAddress'=>$this->CI->session->userdata('ip_address'),
                'logTypeId'=>$row->logTypeId,
                'createdDate'=>date('Y-m-d H:i:s'),
            );
            $this->CI->db->insert('tbl_log',$log_data);
        }
    
   }
   
   /**
    * Utility::create_guid()
    * @function create unique guid
    * @param integer $limit charcter limit 
    * @return guid
    */
   public function create_guid($limit=5) { 

        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i = 1;
        $pass = '' ;
    
        while ($i <= $limit) {
    
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
    
        }
        return $pass;
    }
    
    /**
     * Utility::is_admin_login()
     * @function check wheater uesr is admin and login
     * @return boolean
     */
    function is_admin_login(){
   	if($this->CI->session->userdata('usrId') && $this->CI->session->userdata('usrRole')=='admin'){
			return true;				
		}else{		
			return false;				
		}			
    }

    /**
     * Utility::is_user_login()
     * @function check where user is login and has user role is basic
     * @return boolean
     */
    function is_user_login(){
   	if($this->CI->session->userdata('usrId') && $this->CI->session->userdata('usrRole')=='basic'){
			return true;				
		}else{		
			return false;				
		}			
    }


   /**
    * Utility::show_message()
    * 
    * @param string $msgString 
    * @param string $type as pos or neg
    * @return message html
    */
   function show_message($msgString='',$type=''){
        $successMessage = $this->CI->session->flashdata('item');
        $errors = validation_errors();
         if(!empty($errors)){
            //validation error
            $message = '<div class="error col-sm-offset-2 col-sm-10">'.validation_errors('<p class="glyphicon glyphicon-remove col-sm-12">','</p>').'</div>';
         }
         else if(!empty($successMessage)) {
            //success message through session
            $message = '<div class="warning pos">'.$successMessage.'</div>';
         }
         else if($msgString!='' && $type!=''){
            //message pass through view
            $message = '<div class="warning '.$type.' ">'.$msgString.'</div>';
         }
         else {
            $message = '<div class="warning hidden"></div>';
         }
         return $message;
      
   }
   
   /**
    * Utility::dateFormat()
    * @function 
    * @param mixed $dateTime
    * @param string $format
    * @return
    */
   function dateFormat($dateTime,$format="")
   {
    	if(empty($dateTime))
    		return '';
    		
    	$y = $m = $d = $h = $i = $s = 0;
    
        $date = $dateTime;
    
    	$dateArr = explode('/',$date);
    	if(sizeof($dateArr) == 3) {
    		$date = $dateArr[2].'-'.$dateArr[0].'-'.$dateArr[1];
        }
        
    	list($y,$m,$d) = explode("-",$date);
    
    	$y = (empty($y))?0:(int)$y;
    	$m = (empty($m))?0:(int)$m;
    	$d = (empty($d))?0:(int)$d;
    
    
        if(empty($y) or empty($m) or empty($d))
    		return '';
    
        $timestamp = mktime(0,0,0,$m,$d,$y);
    		
    	return date($format,$timestamp);

    }
    
    function setLanguage(){

        $language =  $this->CI->session->userdata('lng');
        if(empty($language)){
              $this->CI->session->set_userdata('lng','En');
        }

    }
   
}

/**
 * End of file utility.php
 */ 