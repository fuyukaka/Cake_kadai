<div align="center">
<h2>登録</h2>
<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./add')); ?>
<table class="main_table">
<tr>
			<td class="name">ID</td>
			<td class="text"><?php echo $this->Form->text('id', array('default' =>"")); ?></td>
		</tr>

		<tr>
			<td class="name">商品名</td>
			<td><?php echo $this->Form->text('item_name', array('default' =>"")); ?></td>
		</tr>
		<tr>
			<td class="name">価　格</td>
			<td><?php echo $this->Form->text('price', array('default' =>"")); ?></td>
		</tr>
		<tr>
			<td class="name">備　考</td>
			<td><?php echo $this->Form->text('keyword', array('default' =>"")); ?></td>
		</tr>
</table>
<br>
<?php
 echo $this->Form->end("登録"); ?>
 <br>
 <form action="./menu">
		<input type="submit" class="menu" value="メニューへ戻る">
</form>