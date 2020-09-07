<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $name = 'User';
	public $hasMany = array(
		'Comment' => array(
			'dependent' => true,
			'exclusive'=> false,
		)
	);

}
