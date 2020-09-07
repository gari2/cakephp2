<?php

class Member extends AppModel{

  public $belongsTo = array('Division');
  
  function test()
  {
    // $members = $this->find(
    //     'all',
    //     array('conditions' => array('Member.name like' => '山田%'))
    //   );
      //$this->log($members, LOG_DEBUG);

      // $divisions = $this->Division->find(
      //   'all',
      //   array('conditions' => array(
      //     'Division.name' => array('総務部','営業部')
      //   ))
      //   );
      // $this->log($divisions, LOG_DEBUG);
      return $members;
  }
}