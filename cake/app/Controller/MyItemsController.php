
<?php
App::uses('AppController', 'Controller');

class MyItemsController extends AppController
{

	public $layout = 'MyItems';
	public $msg = null;
	public $components = array('Paginator', 'Session');

	//最初のページ
	public function index()
	{
	}

	//メニューページ
	public function menu()
	{
		$this->Session->delete('id');
		$this->Session->delete('item_name');
		$this->Session->delete('price');
		$this->Session->delete('keyword');
	}

	//一覧
	public function itemList()
	{

		// データベースから取り出し
		$datas = $this->MyItem->find('all',array('order' => array('MyItem.id ASC')));
		$this->set('datas',$datas);

	}

	//ID検索
	public function changeForm()
	{

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
			$msg = '※該当する商品は存在しません';
		}

		//検索をかけられているかどうかの判断(ページ戻るだけだと検索してないから)
		if(!($count==0))
		{
			$item_name = $data['MyItem']['item_name'];
			$price = $data['MyItem']['price'];
			$keyword = $data['MyItem']['keyword'];

			//セッションに値を保存
			$this->Session->write('id',$id);
			$this->Session->write('item_name',$item_name);
			$this->Session->write('price',$price);
			$this->Session->write('keyword',$keyword);
		}

		//変数セット
		$this->set(compact('data','id','count','msg'));

	}

	//更新
	public function change()
	{
		//データの受け取り
		if(isset($this->request->data['MyItem']))
		{
			//データの更新
			$data = $this->MyItem->save($this->request->data);

		}

		//結果の判定
		if(is_array($data))
		{
			$msg = '更新しました';
			$this->Session->delete('id');
			$this->Session->delete('item_name');
			$this->Session->delete('price');
			$this->Session->delete('keyword');
		}
		else
		{
			$msg = '更新できませんでした';
		}

		//配列でエラーを取得
		$errors = $this->MyItem->invalidFields();

		//変数セット
		$this->set(compact('msg','errors'));

    }

    //ID検索ページ
	public function changepage()
	{
	}

	//登録入力ページ
	public function addForm()
	{
	}

	//登録
	public function add()
	{

		if(isset($this->request->data['MyItem']['id']))
		{

			//データの登録
			$data = $this->MyItem->save($this->request->data);

			$id = $this->request->data['MyItem']['id'];
			$item_name = $this->request->data['MyItem']['item_name'];
			$price = $this->request->data['MyItem']['price'];
			$keyword = $this->request->data['MyItem']['keyword'];

			//セッションに値を保存
			$this->Session->write('id',$id);
			$this->Session->write('item_name',$item_name);
			$this->Session->write('price',$price);
			$this->Session->write('keyword',$keyword);

		}

		//結果の判定
		if (is_array($data))
		{
			$msg = '登録しました';

			$this->Session->delete('id');
			$this->Session->delete('item_name');
			$this->Session->delete('price');
			$this->Session->delete('keyword');
		}
		else
		{
			$msg = '登録できませんでした';
		}

		//変数セット
		$this->set('msg',$msg);
	}

		//削除のID検索
	public function deleteForm()
	{

		//データベースから取り出し
		if (isset($this->data['MyItem']['id']))
		{
			$id = $this->request->data['MyItem']['id'];

			$search = array('conditions' =>array('MyItem.id' => $id));
			$data = $this->MyItem->find('first',$search);
		}
		else
		{
			$data = null;
			$id = null;
		}

		//ID検索の結果判定
		$count = count($data);

		if(!($count==0))
		{
			$msg = null;
		}
		else
		{
			$msg = '※該当する商品は存在しません';
		}

		//変数セット
		$this->set(compact('data','id','count','msg'));
	}

	//削除
	public function delete()
	{

		if ($this->request->data['MyItem']['id'])
		{
			$id = $this->request->data['MyItem']['id'];

			//データの削除
			$data = $this->MyItem->delete($id);
		}

		//結果の判定
		if($data)
		{
			$msg = '削除しました';
		}

		else
		{
			$msg = '削除できませんでした';
		}

		//変数セット
		$this->set('msg',$msg);
	}

	//削除ページ
	public function deletepage()
	{
	}


}
