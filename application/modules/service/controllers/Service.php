<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends MX_Controller {
	private $b_Check = true;

	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util_helper')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model('admin/modelservice');

		$data = Modules::run('header','home');
		$data['page'] = 'service';
		$this->template->set_partial('header','header',$data);

		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index($cat = 0){
		$data = array();
		$data['page'] = "service";

		$where = array('status'=>1);
		if ($cat)
			$where['category_id'] = $cat;
 		$list_items = $this->modelservice->getService($where);
 
 		$data['list_items'] = $list_items;
		$this->template->build('service',$data);
	}
	public function index_t($slug = ''){
		$data = array();
		$data['page'] = "service";

		$where = array('status'=>1);

		$category = $this->modelcategory->getCategoryBy('slug',$slug);
		if ($category){
			$where['category_id'] = $category['id'];
		}

		$list_items = $this->modelservice->getService($where);

 		$data['category'] = $category;
 		$data['list_items'] = $list_items;
		$this->template->build('service',$data);
	}
}