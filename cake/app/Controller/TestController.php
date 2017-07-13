
<?php

class TestController extends AppController
{

function index()
	{
		// データベースから取り出し
		$datas = $this->MyItem->find('all');
		$this->set('datas',$datas);

	}

}