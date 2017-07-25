<div align="center">
	<h2>一覧</h2>
	<table class="list_table" border="1">
		<tr>
			<th class="id">ID</th>
			<th class="item_name">商品名</th>
			<th class="price">価格</th>
			<th class="keyword">備考</th>
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
	<br>
	<br>
	<input type="button" onClick="location.href='http://localhost/Cake_kadai/cake/myItems/menu'" value="メニューへ戻る" class="menu">


</div>
