<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MX_Controller {
	private $b_Check = true;

	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model('admin/modelproduct');
		$this->load->model('admin/modelcategory');

		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data);

		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index($type = 0,$cat = 0){
		$dataR = Modules::run('right',$type);
		$this->template->set_partial('right','right',$dataR);

		$data = array();
		$data['title'] = "Product";
		$data['page'] = "product";

		if ($cat>0){
			$category = $this->modelcategory->getCategoryById($cat);
			$data['cat'] = $category;
			$list_product = $this->modelproduct->getProduct(array('category_id'=>$cat),' LIMIT 0,5');
		}else{
			$data['cat'] = array('type'=>$type,'id'=>0,'name'=>'');
			$list_product = $this->modelproduct->getProduct(array('type'=>$type),' LIMIT 0,5');
		}

		$data['list_product'] = $list_product;
		$this->template->build('product',$data);
	}
	public function index_t($slug = ''){
		$dataR = Modules::run('right',0);
		$this->template->set_partial('right','right',$dataR);

		$data = array();

		$category = $this->modelcategory->getCategoryBy('slug',$slug);
		if ($category){
			$data['cat'] = $category;
			$data['title'] = $category['name'];
			$data['description'] = $category['description'];
			$list_product = $this->modelproduct->getProduct(array('category_id'=>$category['id']),' LIMIT 0,5','position,id DESC');
		}

		$data['list_product'] = $list_product;
		$this->template->build('product',$data);
	}
	public function detail($id=0) {
		if ($id<=0) 
			redirect(base_url().'product');

		$detail_product = $this->modelproduct->getProductById($id);
		if (!$detail_product)
			redirect(base_url().'product');

		$other_product = array();
		if($detail_product['category_id']>0){
			$category = $this->modelcategory->getCategoryById($detail_product['category_id']);
			if ($category)
				$other_product = $this->modelproduct->getProduct(array('category_id'=>$category['id']),' LIMIT 0,5');
			else
				$category = array("type"=>$detail_product['type'],"id" =>0,"name"=>"");
		}else{
			$category = array("type"=>$detail_product['type'],"id" =>0,"name"=>"");
			$other_product = $this->modelproduct->getProduct(array('type'=>$detail_product['type']),' LIMIT 0,5');
		}
		

		$dataR = Modules::run('right',$detail_product['type']);
		$this->template->set_partial('right','right',$dataR);

		$data['other_product'] = $other_product;
		$data['item'] = $detail_product;
		$data['cat'] = $category;
		$this->template->build('product-detail',$data);
	}

	public function detail_t($slug='') {
		if ($slug == '') 
			redirect(base_url().'product');

		$detail_product = $this->modelproduct->getProductBy($slug,'slug');
		if (!$detail_product)
			redirect(base_url().'product');

		$other_product = array();
		if($detail_product['category_id']>0){
			$category = $this->modelcategory->getCategoryById($detail_product['category_id']);
			if ($category)
				$other_product = $this->modelproduct->getProduct(array('category_id'=>$category['id']),' LIMIT 0,5');
			else
				$category = array("type"=>$detail_product['type'],"id" =>0,"name"=>"","slug"=>"");
		}else{
			$category = array("type"=>$detail_product['type'],"id" =>0,"name"=>"","slug"=>"");
			$other_product = $this->modelproduct->getProduct(array('type'=>$detail_product['type']),' LIMIT 0,5');
		}
		
		$this->modelproduct->updateProductBy('slug',$slug,array('views'=>$detail_product['views']+1));

		$dataR = Modules::run('right',$detail_product['type']);
		$this->template->set_partial('right','right',$dataR);

		$data['title'] = $detail_product['title'] ;
		$data['other_product'] = $other_product;
		$data['item'] = $detail_product;
		$data['cat'] = $category;
		$this->template->build('product-detail',$data);
	}
}