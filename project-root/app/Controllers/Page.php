<?php namespace App\Controllers;

use App\Models\Blogmodel;

class Page extends BaseController
{
	public function index(){
		$model = new Blogmodel();
		$data['news'] = $model->getPost();
		echo view('template/header', $data);
		echo view('page/home');
		echo view('template/footer');
	}

    public function post($id){
        $model= new Blogmodel();
        $data['post'] = $model->getPost($id);
        echo view('template/header', $data);
        echo view('blog/post', $data);
        echo view('template/footer');
    }

    public function blogList(){
        $model = new Blogmodel();
        $data = [
            'currentPage' => $this->request->getVar('pages') ? $this->request->getVar('pages') : 1,
            'table' => $model->paginate(5, 'post'),
            'pager'=> $model->pager,
        ];
        echo view('template/header', $data);
        echo view('blog/blogList', $data);
        echo view('template/footer');
    }
}
