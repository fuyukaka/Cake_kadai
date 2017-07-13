
<?php
App::uses('AppController', 'Controller');

class MyItemController extends AppController
{

	function index()
	{
		$this->autoLayout = false;
	}


	function list()
	{
		//レイアウト
		$this->autoLayout = false;

		// データベースから取り出し
		$datas = $this->MyItem->find('all');
		$this->set('datas',$datas);

	}

	function find()
	{
		//レイアウト
		$this->autoLayout = false;

		//データベースから取り出し
		if (isset($this->data['id']))
		{
			$id = $this->data['id'];
			$search = array('conditions' =>array('MyItem.id' => $id));
			$data = $this->MyItem->find('first',$search);
		}
		else
		{
			$msg = "該当する商品は存在しません";
		}

		$this->set('data',$data);
		$this->set('msg',$msg);
		$this->set('id',$id);
	}

	function change()
	{
		// レイアウト関係
		$this->autoLayout = false;

		//データの受け取り
		$id=$this->data["id"];
		$item_name=$this->data["item_name"];
		$price=$this->data["price"];
		$keyword=$this->data["keyword"];

		$data=array('MyItem'=>array('id'=>$id,'item_name'=>$item_name,'price'=>$price,'keyword'=>$keyword));

		//データの更新
		$result=$this->MyItem->save($data);

		if(isset($result))
		{
			$done="更新しました";
		}
		else
		{
			$done="更新できませんでした";
		}

		$this->set('done',$done);

    }

	function changepage()
	{
		$this->autoLayout = false;
	}
}