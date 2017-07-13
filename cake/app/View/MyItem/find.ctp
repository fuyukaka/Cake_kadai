<form method="post" action="./find">
	<input type="text" name="id" value="<?php print($id)?>" />
	<input type="submit" value="ID検索"/>
</form>

<table>
	<form method="post" action="./change">
		<?php if (isset($data)){?>

		<tr>
			<td>商品名:</td>
			<td><input type="text" name="item_name"
								value="<?php echo $data['MyItem']['item_name'];?>"/></td>
		</tr>
		<tr>
			<td>価格:</td>
			<td><input type="text" name="price"
								value="<?php echo $data['MyItem']['price']; ?>"/></td>
		</tr>
		<tr>
			<td>備考:</td>
			<td><input type="text" name="keyword"
								value="<?php echo $data['MyItem']['keyword']; ?>"/></td>
		</tr>

		<?php }
			else
			{
				print($msg);
			}
		?>

		<input type="hidden" name="id" value="<?php $id ?>">
		<input type="submit" value="更新">
	</form>
</table>