<?php
App::uses('AppModel', 'Model');

class MyItem extends AppModel
{
	/**
	 * バリデーション・ルール
	 */
	public $validate = array(
		/**
		 * 商品ID
		 */
		'id' => array(
			'isUnique' => array(
				'rule' => array('isUnique', true),
				'message' => '※エラー：入力されたIDはすでに存在します。',
				'last' => true,
			),
			'custom' => array(
				'rule' => array('custom','/^[0-9]+$/'),
				'message' => '※エラー：IDは半角数字を入力して下さい。',
				'last' => true,
			),
			'minLength' => array(
				'rule' => array('minLength', 1),
				'message' => '最低1文字です。',
				'last' => true,
			),
			'maxLength' => array(
				'rule' => array('maxLength', 4),
				'message' => '最高4文字です。',
				'last' => true,
			)
		),
		/**
		 * 商品名
		 */
		'item_name' => array(
			'notBlank' => array(
				'rule' => 'notBlank',
				'message' =>'※エラー：商品名が空白です。',
				'last' => true,
			),
			'isUnique' => array(
				'rule' => array('isUnique', true),
				'message' => '※エラー：入力された商品名はすでに存在します。',
				'last' => true,
			),
			'minLength' => array(
					'rule' => array('minLength', 1),
					'message' => '最低1文字です。',
					'last' => true,
			),
			'maxLength' => array(
					'rule' => array('maxLength', 4),
					'message' => '最高10文字です。',
					'last' => true,
			)
		),
		/**
		 * 商品価格
		 */
		'price' => array(
			'notBlank' => array(
				'rule' => 'notBlank',
				'message' =>'※エラー：価格が空白です。',
				'last' => true,
			),
			'custom' => array(
				'rule' => array('custom','/^[0-9]+$/'),
				'message' => '※エラー：価格は半角数字を入力して下さい。',
				'last' => true,
			),
			'minLength' => array(
					'rule' => array('minLength', 1),
					'message' => '最低1文字です。',
					'last' => true,
			),
			'maxLength' => array(
					'rule' => array('maxLength', 4),
					'message' => '最高9文字です。',
					'last' => true,
			)
		),
		/**
		 * 備考
		 */
		'keyword' => array(
			'notBlank' => array(
				'rule' => 'notBlank',
				'message' =>'※エラー：備考が空白です。',
				'last' => true,
			),
			'minLength' => array(
					'rule' => array('minLength', 1),
					'message' => '最低1文字です。',
					'last' => true,
			),
			'maxLength' => array(
					'rule' => array('maxLength', 20),
					'message' => '最高4文字です。',
					'last' => true,
			)
		),
	);
}
