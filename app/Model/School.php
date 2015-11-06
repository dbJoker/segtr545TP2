<?php
App::uses('AppModel', 'Model');
/**
 * School Model
 *
 * @property Year $Year
 */
class School extends AppModel {

    public $actsAs = array(
    'Upload.Upload' => array(
        'fields' => array(
            'photo' => 'img/photos/:id'
            )
        )
    );
    
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'adress' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                'photo_file' => array(
                'rule' => array('fileExtension', array('jpg','png', 'gif')),
                'message' => 'Your image is not a jpg, png or gif',
                'rule' => array('fileSize', '<=', '1MB'),
                'message' => 'The picture must be less than 1MB',
                'allowEmpty' => true
            )
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Year' => array(
			'className' => 'Year',
			'foreignKey' => 'school_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
