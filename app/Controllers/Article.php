<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use CodeIgniter\Controller;

class Article extends BaseController
{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function index()
    {
        $data['articles'] = $this->articleModel->getArticles();
        return view('articles/upload', $data);
    }
    public function create()
    {
        $data =[
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ];

        $this->articleModel->insertArticle($data);

        return redirect()->to('dashboard')->with('message', 'Data Berhasil diinput');
    }
    public function ubah($id)
    {
        $data['row'] = $this->articleModel->getArticles($id);

        return view('articles/upload_update', $data);
    }
    public function update($id){
        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ];

        $this->articleModel->update($id, $data);
        return redirect()->to('dashboard');
    }
    public function delete($id){
        $this->articleModel->delete($id);

        return redirect()->to('dashboard');
    }
}