<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./find'));
 echo $this->Form->text('id');
echo $this->Form->end("ID検索"); ?>

<table>
<tr>
			<td>商品名:</td>
			<td></td>
		</tr>
		<tr>
			<td>価格:</td>
			<td></td>
		</tr>
		<tr>
			<td>備考:</td>
		<td></td>
		</tr>
		</table>