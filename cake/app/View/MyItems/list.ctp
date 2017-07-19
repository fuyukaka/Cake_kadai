<table>
	<tr>
		<td>ID</td>
		<td>商品名</td>
		<td>価格</td>
		<td>備考</td>
	</tr>
	<?php foreach ($datas as $data){ ?>
 	<tr>
		<td><?php echo $data['MyItem']['id']; ?></td>
		<td><?php echo $data['MyItem']['item_name']; ?></td>
		<td><?php echo $data['MyItem']['price']; ?></td>
		<td><?php echo $data['MyItem']['keyword']; ?></td>
	</tr>
	<?php } ?>
</table>