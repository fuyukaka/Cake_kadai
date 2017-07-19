
<?php
App::uses('AppController', 'Controller');

class MyItemsController extends AppController
{

	//メニューページ
	function index()
	{
		$this->autoLayout = false;
	}

	//一覧
	function list()
	{
		//レイアウト
		$this->autoLayout = false;

		// データベースから取り出し
		$datas = $this->MyItem->find('all');
		$this->set('datas',$datas);

	}

	//ID検索
	function find()
	{
		//レイアウト
		$this->autoLayout = false;

		//データベースから取り出し
		if (isset($this->request->data["id"]))
		{
			$id = $this->request->data["id"];
			$search = array('conditions' =>array('MyItem.id' => $id));
			$result = $this->MyItem->find('first',$search);

		}

		//ID検索の結果判定
		$count = count($result);

		if(!($count==0))
		{
			$msg = null;
		}
		else
		{
			$msg = "該当する商品は存在しません";
		}

		//変数セット
		$this->set('result',$result);
		$this->set('msg',$msg);
		$this->set('count',$count);
	}

	//更新
	function change()
	{
		// レイアウト関係
		$this->autoLayout = false;

		//データの更新
		$result=$this->MyItem->save($this->request->data);

		//結果の判定
		if(isset($result))
		{
			$done = "更新しました";
		}
		else
		{
			$done = "更新できませんでした";
		}

		$this->set('done',$done);

    }

    //ID検索ページ
	function changepage()
	{
		$this->autoLayout = false;
	}

	//登録入力ページ
	function addForm()
	{
		$this->autoLayout = false;
	}

	//登録
	function add()
	{
		$this->autoLayout = false;

		//データの受け取り
		$id = $this->data["id"];
		$item_name = $this->data["item_name"];
		$price = $this->data["price"];
		$keyword = $this->data["keyword"];

		//IDの入力チェック
		if(isset($id))
		{
			//入力されていたら既存のものとかぶってないかチェック
			$search = array('conditions' =>array('MyItem.id' => $id));
			$data = $this->MyItem->find('first',$search);

			$count = count($data);

			//かぶっていなかったら
			if($count==0)
			{
				$msg = null;

				$data = array('MyItem'=>array('id'=>$id,'item_name'=>$item_name,'price'=>$price,'keyword'=>$keyword));

				//データの登録
				$result=$this->MyItem->save($data);
			}

			//かぶっていたら
			else
			{
				$msg = "既に存在するIDです。";
			}
		}

		//入力されていない場合の登録
		else
		{
			$data = array('MyItem'=>array('item_name'=>$item_name,'price'=>$price,'keyword'=>$keyword));

			//データの登録
			$result=$this->MyItem->save($data);
		}


		//結果の判定
		if(isset($result))
		{
			$msg = "登録しました";
		}

		$this->set('msg',$msg);
	}

		//削除のID検索
	function deleteFind()
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

		//ID検索の結果判定
		$count = count($data);

		if(!($count==0))
		{
			$msg = null;
		}
		else
		{
			$msg = "該当する商品は存在しません";
		}

		//変数セット
		$this->set('data',$data);
		$this->set('msg',$msg);
		$this->set('id',$id);
		$this->set('count',$count);
	}

	//削除
	function delete()
	{
		//レイアウト
		$this->autoLayout = false;

		$id = $this->data["id"];

		if (isset($id))
		{
			$result = $this->MyItem->delete($id);
		}

		if($result)
		{
			$msg = "削除しました";
		}

		else
		{
			$msg = "削除できませんでした";
		}

		$this->set('msg',$msg);
	}

	//削除ページ
	function deletepage()
	{
		//レイアウト
		$this->autoLayout = false;
	}


}
