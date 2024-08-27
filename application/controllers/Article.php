<?php


namespace Application\Controllers;

use Application\Model\Article as ArticleModel;
use Application\Model\Category;
class Article extends  Controller
{
    public function index()
    {
       $article = new ArticleModel();
       $articles= $article->all();
       return $this->view('panel.article.index',compact('articles'));
    }
    public function create()
    {
        $categories = new Category();
        $categories = $categories->all();
        return $this->view('panel.article.create',compact('categories'));
    }

    public function store()
    {
     $article = new ArticleModel();
     $article->insert($_POST);
     return $this->redirect('article');

    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        $db_article = new ArticleModel();
        $article = $db_article->find($id);
        $categories = new Category();
        $categories = $categories->all();
        return $this->view('panel.article.edit',compact('categories','article'));
    }
  public function update($id)
  {

      $article = new ArticleModel();
      $article->update($id,$_POST);
      return $this->redirect('article');
  }
  public function destroy($id)
  {
    $article = new ArticleModel();
    $article = $article->delete($id);
    return $this->redirect('article');

  }
}