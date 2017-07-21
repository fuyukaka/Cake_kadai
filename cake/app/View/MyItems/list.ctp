<br>
<div align="center">
<table id="list_table" border="1">
	<tr>
		<th class="id">ID</td>
		<th class="item_name">商品名</td>
		<th class="price">価格</td>
		<th class="keyword">備考</td>
	</tr>
	<?php foreach ($datas as $data){ ?>
 	<tr>
		<td class="id"><?php echo $data['MyItem']['id']; ?></td>
		<td><?php echo $data['MyItem']['item_name']; ?></td>
		<td><?php echo $data['MyItem']['price']; ?></td>
		<td><?php echo $data['MyItem']['keyword']; ?></td>
	</tr>
	<?php } ?>
</table>
<br><br>
<form action="./menu">
		<input type="submit" id='menu' value="メニューへ戻る">
</form>
</div>
