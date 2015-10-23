<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MX_Controller {
	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model(array('model'));

		$data = Modules::run('header','home');
		$data['page'] = 'contact';

		$this->template->set_partial('header','header',$data );
		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index(){
		$data = array();
		$data['page'] = 'contact';

		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email'); 
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[5]'); 

		#Kiểm tra điều kiện validate 
		if($this->form_validation->run() == TRUE){ 
			$dataC['name'] = $this->input->post('name');
			$dataC['email'] = $this->input->post('email'); 
			$dataC['phone'] = $this->input->post('phone'); 
			$dataC['content'] = $this->input->post('content'); 

			$config['protocol']    = 'smtp';
	        $config['smtp_host']    = 'ssl://smtp.gmail.com';
	        $config['smtp_port']    = '465';
	        $config['smtp_timeout'] = '7';
	        $config['smtp_user']    = 'dunghq87@gmail.com';
	        $config['smtp_pass']    = 'Hoangdung87';
	        $config['charset']    = 'utf-8';
	        $config['newline']    = "\r\n";
	        $config['mailtype'] = 'html'; // or html
	        $config['validation'] = TRUE; // bool whether to validate email or not      

			$this->load->library('email',$config);

			$this->email->from($this->input->post('email'),$this->input->post('name'));
			$this->email->to('contact@5kientrucsu.com');

			$this->email->subject($this->input->post('phone'));
			$this->email->message($this->input->post('content'));

			$this->model->insertSupport($dataC);

			if ($this->email->send())
				$data['b_Check']= true;
			else{
				var_dump($this->email->print_debugger());die;
				$data['b_Check']= false;
			}
		} 

		$this->template->build('contact',$data);
	}
	
}