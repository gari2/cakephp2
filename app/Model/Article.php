<?php
App::uses('AppModel', 'Model');
/**
 * Article Model
 *
 */
class Article extends AppModel {

  public $name = 'Article';
  public $validate = array(
    'title' => array(
      'rule' => 'notEmpty'
    )
  );
}
