<?php

class ArticlesController extends AppController 
{
public $uses = array('Article', 'Tags', 'Articles_Tags');

 public function index()
 {
    $articles = $this->Article->test();
    
//   $articles = $this->Article->find('all', array('order' => 'Article.id'));
     $this->log($articles, LOG_DEBUG);
     $this->set('articles', $articles);   
 }

}