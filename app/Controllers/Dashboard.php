<?php

namespace App\Controllers;
use App\Models\ArticleModel;

class Dashboard extends BaseController
{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function index()
    {
        $all = $this->articleModel->getArticles();
        $data = array(
            'dataArtikel' => $all,
        );
        return view('dashboard', $data);
    }
}