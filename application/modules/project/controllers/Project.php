<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends MX_Controller {
	private $b_Check = true;

	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util_helper')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model('admin/modelproject');

		$data = Modules::run('header','home');
		$data['page'] = 'project';
		$this->template->set_partial('header','header',$data);

		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index(){
		$data = array();
		$data['page'] = "project";

		$where = array('status'=>1);
		$category = array('name'=>'Tất cả dự án','slug'=>'project','description'=>'');
		$list_items = array();

		$category['childs'] = $this->modelcategory->getCategories(array('type'=>2));

 		$data['category'] = $category;
 		$data['list_items'] = $list_items;
		$this->template->build('project',$data);
	}
	public function index_t($slug = ''){
		$data = array();
		$data['page'] = "project";

		$where = array('status'=>1);
		$category = array();
		$list_items = array();

		if ($slug!=''){
			$category = $this->modelcategory->getCategoryBy('slug',$slug);
			if ($category){
				$where['category_id'] = $category['id'];
				if ($category['parent']==-1)
					$category['childs'] = $this->modelcategory->getCategories(array('parent'=>$category['id']));
				else
					$category['parent'] = $this->modelcategory->getCategoryBy('id',$category['parent']);
			}

			$list_items = $this->modelproject->getProject($where);
		}

 		$data['category'] = $category;
 		$data['list_items'] = $list_items;
		$this->template->build('project',$data);
	}
}