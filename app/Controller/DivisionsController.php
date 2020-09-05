<?php
class DivisionsController extends AppController {
    public $uses = array('Member', 'Post', 'Division');
    public function index() {
        $this->loadModel('Member', 'Division');
        $this->Division->test();
	}
}