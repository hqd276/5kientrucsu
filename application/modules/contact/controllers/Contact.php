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

			$this->load->library('email');

			$this->email->from($this->input->post('email'),$this->input->post('name'));
			$this->email->to('contact@5kientrucsu.com'); 
			$this->email->cc('dunghq87@gmail.com'); 

			$this->email->subject($this->input->post('phone'));
			$this->email->message($this->input->post('content'));	

			if ($this->model->insertSupport($dataC) || $this->email->send())
				$data['b_Check']= true;
			else
				$data['b_Check']= false;
		} 

		$this->template->build('contact',$data);
	}
	
}