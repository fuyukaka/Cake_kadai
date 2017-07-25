<div align="center">
	<h2>登録</h2>
	<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./add')); ?>
	<table class="main_table">
		<tr>
			<td class="name">ID</td>
			<td class="text"><?php echo $this->Form->text('id', array('value' =>"",'maxlength' => '4')); ?></td>
		</tr>
		<tr>
			<td class="name">商品名</td>
			<td><?php echo $this->Form->text('item_name', array('default' =>"",'maxlength' => '10')); ?></td>
		</tr>
		<tr>
			<td class="name">価　格</td>
			<td><?php echo $this->Form->text('price', array('default' =>"",'maxlength' => '9')); ?></td>
		</tr>
		<tr>
			<td class="name">備　考</td>
			<td><?php echo $this->Form->text('keyword', array('default' =>"",'maxlength' => '20')); ?></td>
		</tr>
	</table>
	<br>
	<?php echo $this->Form->end("登録"); ?>
	<br>
	<input type="button" onClick="location.href='http://localhost/Cake_kadai/cake/myItems/menu'" value="メニューへ戻る" class="menu">
</div>