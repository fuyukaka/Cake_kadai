<form method="post" action="./deleteFind">
	<input type="text" name="id" value="<?php print($id)?>" />
	<input type="submit" value="ID検索"/>
</form>

<table>
	<form method="post" action="./delete">
		<?php if(!($count==0))
			{	?>

		<tr>
			<td>商品名:</td>
			<td><?php echo $data['MyItem']['item_name'];?></td>
		</tr>
		<tr>
			<td>価格:</td>
			<td><?php echo $data['MyItem']['price']; ?></td>
		</tr>
		<tr>
			<td>備考:</td>
			<td><?php echo $data['MyItem']['keyword']; ?></td>
		</tr>

		<input type="hidden" name="id" value="<?php echo $data['MyItem']['id']; ?>"">
</table>

<input type="submit" value="削除">

		<?php }

		else{ ?>

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

		<input type="hidden" name="id" value="">
</table>

<input type="submit" value="削除">

		<?php
				print($msg);
			}
		?>

</form>