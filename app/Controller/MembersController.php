<?php
class MembersController extends AppController {
    public $uses = array('Member', 'Post', 'Division');
    public function index() {
        $this->loadModel('Member', 'Division');
        $this->Member->test();
        // $this->Division->test();

        $divisions = $this->Division->find(
            'all',
            array('conditions' => array(
              'not'=>array('Division.name' => array('総務部','営業部'))
            ))
            );

            $this->log($divisions, LOG_DEBUG);

        $members = $this->Member->find(
            'all',
            array('conditions' => array(
                'and'=>array(
                'Member.is_manager' => true,
                'Member.age <=' => 40
                )
            ))
        );

        $this->log($members, LOG_DEBUG);

        $members2 = $this->Member->find(
            'all',
            array('conditions'=>array(
                'Member.age between ? and ?' => array(18,30)
            ))
            );
        $this->log($members2, LOG_DEBUG);

        $members3 = $this->Member->find(
            'all',
            array('conditions' => array(
                'Member.member_from >=' => date('Y-m-d', strtotime('-900 days')),
            ))
            );
        $this->log($members3, LOG_DEBUG);
        
        $members4 = $this->Member->find(
            'all',
            array('fields'=> array('Member.id', 'Member.name'))
        );
        $this->log($members4, LOG_DEBUG);

        // $members5 = $this->Member->find(
        //     'all',
        //     array('fields'=> array('Member.id', 'Member.name', 'Division.name'))
        // );
        // $this->log($members5, LOG_DEBUG);

        $members6 = $this->Member->query('select count(*) from members');

        $this->log($members6, LOG_DEBUG);

        // $members8 = $this->Member->query('update members set is_manager = false');

        $members7 = $this->Member->query('select * from members as Members');

        $this->log($members7, LOG_DEBUG);

        $results = $this->Member->find(
            'first',
            array(
                'fields' => array('max(age) as age_max')
            )
        );
        $this->log($results, LOG_DEBUG);

        $count = $this->Member->find(
            'count',
            array(
                'conditions' => array('Member.is_manager' => false))
        );
        $this->log($count, LOG_DEBUG);

        // $this->Division->delete(1, true);
        // $this->Member->deleteAll(array('is_manager' => 1));
        $this->Member->create();
        $member9 = $this->Member->save(
            array(
                'Member' => array(
                    'id'=> '4',
                    'name' => 'やまだたろう',
                    'division_id'=> 2,
                    'is_manager'=> false,
                    'member_from'=> '2009-08-08',
                )
            )
        );

        if ($member9 !== false)
        {
            // printf('ID is %d', $member['Member']['id']);
            $this->log($member9['Member']['id'], LOG_DEBUG);
        }
    }
    
    public function index2()
    {
        $members = $this->Member->find('all', array('order' => 'Member.id'));
        
        $this->set('members', $members);
    }

    public function index3()
    {
        $members = $this->Member->find(
            'all',
            array('conditions' => array('Division.name like' => '営業%'))
        );

        $this->log($members, LOG_DEBUG);
    }

    public function index4()
    {
        $this->Member->unbindModel(array('belongsTo' => array('Division')));
        $members = $this->Member->find(
            'all'
        );
        $this->log($members, LOG_DEBUG);
        $members = $this->Member->find(
            'all'
        );
        $this->log($members, LOG_DEBUG);
    }
}