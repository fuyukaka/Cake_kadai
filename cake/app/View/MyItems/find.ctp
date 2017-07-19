<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./find'));
 echo $this->Form->text('id', array('default' =>$result['id']));
echo $this->Form->end("ID検索"); ?>

<table>
	<?php $this->Form->create("MyItem",array('type'=>'post','url'=>'./change'));
		if(!($count==0))
			{	?>

		<tr>
			<td>商品名:</td>
			<td><?php echo $this->Form->text('item_name', array('default' =>$result['item_name'])); ?></td>
		</tr>
		<tr>
			<td>価格:</td>
			<td><?php echo $this->Form->text('price', array('default' => $result['price'])); ?></td>
		</tr>
		<tr>
			<td>備考:</td>
			<td><?php echo $this->Form->text('keyword', array('default' => $result['keyword'])); ?></td>
		</tr>

		<?php $this->Form->input('id', array('default' => $result['id'])); ?>
</table>

 <?php echo $this->Form->end("更新");
		}

		else{ ?>

		<tr>
			<td>商品名:</td>
			<td><?php echo $this->Form->text('item_name', array('default' => "")); ?></td>
		</tr>
		<tr>
			<td>価格:</td>
			<td><?php echo $this->Form->text('price', array('default' => "")); ?></td>
		</tr>
		<tr>
			<td>備考:</td>
		<td><?php echo $this->Form->text('keyword', array('default' => "")); ?></td>
		</tr>

		<?php $this->Form->input('id', array('default' =>"")); ?>
</table>

<?php echo $this->Form->end("更新");

				print($msg);
			}
		?>

</form>