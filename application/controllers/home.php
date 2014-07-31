<?php 


/**
 * Home
 * 
 * @package yezzcontrol
 * @author Admin
 * @copyright 2011
 * @version $Id$
 * @access public
 */
class Home extends CI_Controller {
	/**
	 * Home::__construct()
	 * 
	 * @return
	 */
	public function __construct() {

        parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library(array('form_validation','email','recaptcha','utility'));
        //$this->load->model(array('cms_model'));
        //$this->form_validation->set_error_delimiters('<div class="warning neg">', '</div>');

    }
	 
	/**
	 * Home::index()
	 * 
	 * @return
	 */
	public function index(){
	        $data = array(
	           'title'=>'Home',
               'current_page' => 'home'
	        );
            $this->load->view('home_view',$data);
       }
	/**
	 * Home::privatePolicy()
	 * 
	 * @return
	 */
	public function about(){
	        $data = array(
	           'title'=>'About Us',
               'current_page' => 'about'
	        );
            $this->load->view('about_view',$data);
       }
	/**
	 * Home::copyrights()
	 * 
	 * @return
	 */
	public function education_training(){
	        $data = array(
	           'title'=>'About Us',
               'current_page' => 'education_training'
	        );
	        $this->load->view('education_training_view',$data);
       }
	/**
	 * Home::aboutus()
	 * 
	 * @return
	 */
	public function corporate_training(){
    	    $data = array(
	           'title'=>'Corporate Training',
               'current_page' => 'corporate_training'
	        );
	        $this->load->view('corporate_training_view',$data);

       }
	/**
	 * Home::termAndCondition()
	 * 
	 * @return
	 */
	public function content_development(){
	       $data = array(
	           'title'=>'Content Development',
               'current_page' => 'content_development'
	        );
	        $this->load->view('content_development_view',$data);
       }
       

	public function consulting(){
	        $data = array(
	           'title'=>'Consulting',
               'current_page' => 'consulting'
	        );
	        $this->load->view('consulting_view',$data);
       }
       
    
	public function case_studies(){
	        $data = array(
	           'title'=>'Case Study',
               'current_page' => 'case_studies'
	        );
	        $this->load->view('case_studies_view',$data);
       }
  
	public function gallery(){
	        $data = array(
	           'title'=>'Gallery',
               'current_page' => 'gallery'
	        );
	        $this->load->view('gallery_view',$data);
       }

public function testimonial(){
	        $data = array(
	           'title'=>'Testimonial',
               'current_page' => 'testimonial'
	        );
	        $this->load->view('testimonial_view',$data);
       }

  /**
	 * Home::termAndCondition()
	 * 
	 * @return
	 */
	public function careers(){
	        $data = array(
	           'title'=>'Careers',
               'current_page' => 'careers'
	        );
            $this->load->view('careers_view',$data);
       }
  
  
      /**
       * Home::contactUs()
       * 
       * @return
       */
      public function contact_us()
    {
        $data = array(
	           'title'=>'Contact Us',
               'current_page' => 'contact_us'
	        );
       
        if(!empty($_POST))
        {
            //debug_var($this->input->post());
            $formData = $this->input->post();
            $this->form_validation->set_rules('txtName', 'Name', 'trim|required');
            $this->form_validation->set_rules('txtEmail', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('txtnumber', 'Contact number', 'trim|required|integer');
            $this->form_validation->set_rules('txtSub', 'Subject', 'trim|required');
            $this->form_validation->set_rules('txtMessage', 'Message', 'trim|required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('contactus_view',$data);
            }
            else
            {
                $formData = $this->input->post();
                $this->_contactUs_mail($formData);
                $data['msg'] = "Contact request has been sent successfully.";
                $data['msgType'] = 'pos';
                $this->load->view('contactus_view',$data);
            }
        }
        else
            $this->load->view('contactus_view',$data);
    }

    /**
       * Home::contactUs()
       * 
       * @return
       */
    public function info()
    {
        $data = array(
	           'title'=>'Contact Us',
               'current_page' => 'contact_us',
               'bootstrapCss' => 'bootstrap.min.css',
               'bootstrapValidateJs' => 'bootstrapValidator.js'
	        );

        $data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();
        
       
        if(!empty($_POST))


        {
            $formData = $this->input->post();
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|integer');
            $this->form_validation->set_rules('message', 'Message', 'trim|required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('info_view',$data);
            }
            else
            {
                $this->recaptcha->recaptcha_check_answer();
                if ($this->recaptcha->getIsValid()) {
                    $formData = $this->input->post();

                    $this->_contactUs_mail($formData);
                    $this->load->view('info_success_view',$data);
                } 
                else {
                    $data['msg'] = "Incorrect image text.";
                    $data['msgType'] = 'neg';
                    $this->load->view('info_success_view',$data);
                }

            }
        }
        else
            $this->load->view('info_view',$data);
    }

    /**
     * Home::_contactUs_mail()
     * 
     * @param mixed $formData
     * @return
     */
    function _contactUs_mail($formData)
    {
        $siteName = $this->config->item('siteName');
        $subject = $siteName.' - query';
        //$this->email->to($this->config->item('adminEmailId'));
        $this->email->from($formData['email'], $formData['name']);
        //$this->email->to($this->config->item('adminEmailId'));
        $this->email->to('sunil@zenithindia.org');
        $this->email->subject($subject);

        $content = '<table width="100%" border="0" bgcolor="#d5e1f1" cellspacing="1" cellpadding="6" style="border:solid 4px #d5e1f1;">';
        $content .= '<tr><td bgcolor="#fbf9f9" width="100" colspan="2"><strong>Client Contact form</strong></td></tr>';
        $content .= '<tr><td bgcolor="#fbf9f9" width="100"><strong>Name: </strong></td><td width="270" bgcolor="#fbf9f9">'.$formData['name'].'</td></tr>';
        $content .= '<tr><td bgcolor="#fbf9f9" width="100"><strong>Email: </strong></td><td width="270" bgcolor="#fbf9f9">'.$formData['email'].'</td></tr>';
        $content .= '<tr><td bgcolor="#fbf9f9" width="100"><strong>Contact Number: </strong></td><td width="270" bgcolor="#fbf9f9">'.$formData['mobile'].'</td></tr>';
        $content .= '<tr><td bgcolor="#fbf9f9" width="100"><strong>Message: </strong></td><td width="270" bgcolor="#fbf9f9">'.$formData['message'].'</td></tr>';
        $content.='</table>';

        //print_r($content);

        $this->email->message($content);
        $this->email->set_mailtype('html');
        $this->email->send();
       // $this->email->print_debugger();
       // exit();
    }
    
   
 }