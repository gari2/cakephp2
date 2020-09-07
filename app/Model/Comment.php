<?php
App::uses('AppModel', 'Model');
/**
 * Comment Model
 *
 * @property User $User
 */
class Comment extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			// 'className' => 'User',
			// 'foreignKey' => 'user_id',
			// 'conditions' => '',
			// 'fields' => '',
			// 'order' => ''
			'counterCache' => true,
			'counterScope' => array('Comment.is_deleted' => false),
		)
	);
}
