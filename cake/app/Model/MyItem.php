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
			'notBlank' => array(
				'rule' => 'notBlank',
				'message' =>'※エラー：IDは整数を入力して下さい。',
				'last' => true,
			),
			'isUnique' => array(
				'rule' => array('isUnique', true),
				'message' => '※エラー：入力されたIDはすでに存在します。',
				'last' => true,
			),
			'naturalNumber' => array(
				'rule' => array('naturalNumber', true),
				'message' => '※エラー：IDは整数を入力して下さい。',
				'last' => true,
			),
			'minLength' => array(
				'rule' => array('minLength', 1),
				'message' => '最低1文字です。',
				'last' => true,
			),
			'maxLength' => array(
				'rule' => array('maxLength', 3),
				'message' => '最高3文字です。',
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
			'naturalNumber' => array(
				'rule' => 'naturalNumber',
				'message' =>'※エラー：価格は整数を入力して下さい。',
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
		),
	);
}
