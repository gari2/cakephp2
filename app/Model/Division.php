<?php

class Division extends AppModel
{
    public $hasMany = array(
        'Member' => array(
            'className'  => 'Member',
            'dependent'    => true
        )
    );
    function test()
    {

    
    $divisions = $this->find(
        'all',
        array('conditions' => array(
          'Division.name' => array('総務部','営業部')
        ))
        );
      $this->log($divisions, LOG_DEBUG);

      return $divisions;
    }
}