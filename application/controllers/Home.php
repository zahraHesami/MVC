<?php

namespace Application\Controllers;

use Application\Model\Article as ArticleModel;
use Application\Model\Category as CategoryModel;
class Home extends Controller
{
    public function index()
    {
      $category = new CategoryModel();
      $article = new ArticleModel();
      $categories =$category->all();
      $articles = $article->all();
      return $this->view('app.index',compact('categories','articles'));
    }

    public function category($id)
    {
     $db_category=new CategoryModel();
     $categories =$db_category->all();
     $db_category=new CategoryModel();
     $category = $db_category->find($id);
        $db_category=new CategoryModel();
        $articles = $db_category->articles($id);
        return $this->view('app.category',compact('categories','articles','category'));
    }

    public function show($id)
    {
     $db_category=new CategoryModel();
     $categories =$db_category->all();
    $db_article = new ArticleModel();
    $article = $db_article->find($id);
    return $this->view('app.show',compact('categories','article'));
    }


}