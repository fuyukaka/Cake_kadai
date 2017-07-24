
<?php
App::uses('AppController', 'Controller');

class MyItemsController extends AppController
{

	//メニューページ
	function index()
	{
		$this->layout = "MyItems";
	}

	function menu()
	{
		$this->layout = "MyItems";
	}

	//一覧
	function list()
	{
		//レイアウト
		$this->layout = "MyItems";

		// データベースから取り出し
		$datas = $this->MyItem->find('all',array('order' => array('MyItem.id ASC')));
		$this->set('datas',$datas);

	}

	//ID検索
	function find()
	{
		//レイアウト
		$this->layout = "MyItems";

		//データベースから取り出し
		if (isset($this->data['MyItem']['id']))
		{
			$id = $this->request->data['MyItem']['id'];

			$search = array('conditions' =>array('MyItem.id' => $id));
			$data = $this->MyItem->find('first',$search);
		}
		else
		{
			$data=null;
			$id=null;
		}
		//ID検索の結果判定
		$count = count($data);

		if(!($count==0))
		{
			$msg = null;
		}
		else
		{
			$msg = "※該当する商品は存在しません";
		}

		//変数セット
		$this->set('data',$data);
		$this->set('msg',$msg);
		$this->set('count',$count);
		$this->set('id',$id);
	}

	//更新
	function change()
	{
		// レイアウト関係
		$this->layout = "MyItems";
		$id = $this->request->data['MyItem']['id'];


		//データの更新
		$data = $this->MyItem->save($this->request->data);

		//結果の判定
		if($data)
		{
			$msg = "更新しました";
		}
		else
		{
			$msg = "更新できませんでした";
		}

		$this->set('msg',$msg);

    }

    //ID検索ページ
	function changepage()
	{
		$this->layout = "MyItems";
	}

	//登録入力ページ
	function addForm()
	{
		$this->layout = "MyItems";
	}

	//登録
	function add()
	{
		$this->layout = "MyItems";

		//データの受け取り
		$id = $this->request->data['MyItem']['id'];

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

				//データの登録
				$data = $this->MyItem->save($this->request->data);
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
			//データの登録
			$data = $this->MyItem->save($this->request->data);
		}


		//結果の判定
		if (is_array($data))
		{
			$msg = "登録しました";
		}
		else
		{
			$msg = "登録できませんでした";
		}

		$this->set('msg',$msg);
	}

		//削除のID検索
	function deleteFind()
	{
		//レイアウト
		$this->layout = "MyItems";

		//データベースから取り出し
		if (isset($this->data['MyItem']['id']))
		{
			$id = $this->request->data['MyItem']['id'];

			$search = array('conditions' =>array('MyItem.id' => $id));
			$data = $this->MyItem->find('first',$search);
		}
		else
		{
			$data=null;
			$id=null;
		}

		//ID検索の結果判定
		$count = count($data);

		if(!($count==0))
		{
			$msg = null;
		}
		else
		{
			$msg = "※該当する商品は存在しません";
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
		$this->layout = "MyItems";

		$id = $this->request->data['MyItem']['id'];

		if (isset($id))
		{
			$data = $this->MyItem->delete($id);
		}

		if($data)
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
		$this->layout = "MyItems";
	}


}
