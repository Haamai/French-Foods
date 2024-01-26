<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Email extends CI_Controller {
  
     public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->config('email');
        }
  
  
    public function index()
    {
        $this->load->view('email_view');
    }
    public function send_mail()
    {
 
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['mobile_number'] = $this->input->post('mobile_number');
     
        $this->load->library('email');
 
        $this->email->from('no-reply@tutsmake', 'Tutsmake')
            ->to($data['email'])
            ->subject('Welcome')
            ->message($this->load->view('email_template', $data, true));
 
        $this->email->send(); 
      
        $arr = array('msg' => 'Something went wrong try again lator', 'success' =>false);
 
        if($this->email->send()){
         $arr = array('msg' => 'Mail has been sent successfully', 'success' =>true);
        }
        echo json_encode($arr);
 
    }
}