<?php namespace App\Controllers;

use App\Models\blogmodel;

class Page extends BaseController
{
	public function index(){
		$model = new blogmodel();
		$data['news'] = $model->getPost();
		echo view('template/header', $data);
		echo view('page/home');
		echo view('template/footer');
	}

    public function post($id){
		$model= new blogmodel();
		$data['post'] = $model->getPost($id);
		echo view('template/header', $data);
		echo view('blog/post', $data);
		echo view('template/footer');
	}

    public function all_blogs(){
		$model = new blogmodel();
		$data['currentPage'] = $this->request->getVar('page_peoples') ? $this->request->getVar('page_peoples') : 1;
		$data['table'] = $model->paginate(5, 'post');
		$data['pager'] = $model->pager;
		echo view('template/header', $data);
		echo view('page/all_blogs');
		echo view('template/footer');
	}

}
