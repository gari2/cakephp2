<?php
App::uses('AppModel', 'Model');
 class Article extends AppModel 
{
    public $name = 'Article';
    public $hasAndBelongsToMany = array('Tag');
    public $validate = array(
      'title' => 'notEmpty'
    );
    public function test()
    {
      $test = $this->find('all', array('order' => 'Article.id'));
      return $test;
    }
    
}