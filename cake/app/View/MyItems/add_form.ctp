<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./add')); ?>
<table>
<tr>
			<td>ID:</td>
			<td><?php echo $this->Form->text('id', array('default' =>"")); ?></td>
		</tr>

		<tr>
			<td>商品名:</td>
			<td><?php echo $this->Form->text('item_name', array('default' =>"")); ?></td>
		</tr>
		<tr>
			<td>価格:</td>
			<td><?php echo $this->Form->text('price', array('default' =>"")); ?></td>
		</tr>
		<tr>
			<td>備考:</td>
			<td><?php echo $this->Form->text('keyword', array('default' =>"")); ?></td>
		</tr>
</table>
<?php
 echo $this->Form->end("更新"); ?>