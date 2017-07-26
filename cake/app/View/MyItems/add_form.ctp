<div align="center">
	<h2>登録</h2>
	<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./add', 'novalidate' => true)); ?>
	<table class="main_table">
		<tr>
			<td class="name">ID</td>
			<td class="text"><?php echo $this->Form->text('id', array('default' => $this->Session->read('id'),'maxlength' => '4','class' =>'form')); ?></td>
		</tr>
		<tr>
			<td class="name">商品名</td>
			<td><?php echo $this->Form->text('item_name', array('default' => $this->Session->read('item_name'),'maxlength' => '10','class' =>'form')); ?></td>
		</tr>
		<tr>
			<td class="name">価　格</td>
			<td><?php echo $this->Form->text('price', array('default' => $this->Session->read('price'),'maxlength' => '9','class' =>'form')); ?></td>
		</tr>
		<tr>
			<td class="name">備　考</td>
			<td><?php echo $this->Form->text('keyword', array('default' => $this->Session->read('keyword'),'maxlength' => '20','class' =>'form')); ?></td>
		</tr>
	</table>
	<br>
	<?php echo $this->Form->end("登録"); ?>
	<br>
	<input type="button" onClick="location.href='http://localhost/Cake_kadai/cake/myItems/menu'" value="メニューへ戻る" class="menu">
</div>