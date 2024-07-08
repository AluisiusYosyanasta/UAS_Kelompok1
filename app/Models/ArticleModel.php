<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'title';  // Set primary key to title
    protected $allowedFields = ['title', 'content'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getArticles($id = null)
    {
        if($id === null){
            return $this->findAll();
        }
        return $this->find($id);
    }

    public function insertArticle($data)
    {
        return $this->insert($data);
    }
}
